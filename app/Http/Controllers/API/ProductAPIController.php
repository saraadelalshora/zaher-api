<?php

namespace App\Http\Controllers\API;


use App\Criteria\Products\NearCriteria;
use App\Criteria\Products\ProductsOfCategoriesCriteria;
use App\Criteria\Products\ProductsOfFieldsCriteria;
use App\Criteria\Products\TrendingWeekCriteria;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\CustomFieldRepository;
use App\Repositories\ProductRepository;
use App\Repositories\UploadRepository;
use Flash;
use Illuminate\Http\Request;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Exceptions\RepositoryException;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class ProductController
 * @package App\Http\Controllers\API
 */
class ProductAPIController extends Controller
{
    /** @var  ProductRepository */
    private $productRepository;
    /**
     * @var CustomFieldRepository
     */
    private $customFieldRepository;
    /**
     * @var UploadRepository
     */
    private $uploadRepository;


    public function __construct(ProductRepository   $productRepo, CustomFieldRepository $customFieldRepo, UploadRepository $uploadRepo)
    {
        parent::__construct();
        $this->productRepository = $productRepo;
        $this->customFieldRepository = $customFieldRepo;
        $this->uploadRepository = $uploadRepo;
    }

    /**
     * Display a listing of the Product.
     * GET|HEAD /products
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try{
            $this->productRepository->pushCriteria(new RequestCriteria($request));
            $this->productRepository->pushCriteria(new LimitOffsetCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfFieldsCriteria($request));
            if ($request->get('trending', null) == 'week') {
                $this->productRepository->pushCriteria(new TrendingWeekCriteria($request));
            } 
            // else {
            //     $this->productRepository->pushCriteria(new NearCriteria($request));
            // }

           
            $products = $this->productRepository;
            
            if($request->from && $request->to){
                $products = $products
                ->scopeQuery(function($query) use($request){
                    return $query->whereBetween('price',[$request->from, $request->to])->orderBy('price','desc');
                });
               

             }
            if($request->category_id){
                $products = $products
                ->scopeQuery(function($query) use($request){
                    return $query->where('category_id', $request->category_id);
                });
               

             }
 
             if($request->name){
                $products = $products
                ->scopeQuery(function($query) use($request){
                    return $query->where('name','like', '%'.$request->name.'%')->orWhere('Product_AR','like', '%'.$request->name.'%')->orWhere('Product_EN','like', '%'.$request->name.'%')
                    ->orWhereHas('category',function($q) use($request)
                    {
                       return $q->where('name','like', '%'.$request->name.'%');
                    });
                });
               

             }
 
             $products = $products->paginate(15);
             
//            $this->productRepository->orderBy('closed');

//            $this->productRepository->orderBy('area');
          

        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }

    /**
     * Display a listing of the Product.
     * GET|HEAD /products/categories
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function categories(Request $request)
    {
        try{
            $this->productRepository->pushCriteria(new RequestCriteria($request));
            $this->productRepository->pushCriteria(new LimitOffsetCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfFieldsCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfCategoriesCriteria($request));

            $products = $this->productRepository->all();

        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }

    /**
     * Display the specified Product.
     * GET|HEAD /products/{id}
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id)
    {
        
        /** @var Product $product */
        if (!empty($this->productRepository)) {
            try{
                $this->productRepository->pushCriteria(new RequestCriteria($request));
                $this->productRepository->pushCriteria(new LimitOffsetCriteria($request));
            } catch (RepositoryException $e) {
                return $this->sendError($e->getMessage());
            }
            $product = $this->productRepository->findWithoutFail($id);


            
        }

        if (empty($product)) {
            return $this->sendError('Product not found');
        }

        return $this->sendResponse($product->toArray(), 'Product retrieved successfully');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $customFields = $this->customFieldRepository->findByField('custom_field_model', $this->productRepository->model());
        try {
            $product = $this->productRepository->create($input);
            $product->customFieldsValues()->createMany(getCustomFieldsValues($customFields, $request));
            if (isset($input['image']) && $input['image']) {
                $cacheUpload = $this->uploadRepository->getByUuid($input['image']);
                $mediaItem = $cacheUpload->getMedia('image')->first();
                $mediaItem->copy($product, 'image');
            }
        } catch (ValidatorException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($product->toArray(), __('lang.saved_successfully', ['operator' => __('lang.product')]));
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request)
    {
        $product = $this->productRepository->findWithoutFail($id);

        if (empty($product)) {
            return $this->sendError('Product not found');
        }
        $input = $request->all();
        $customFields = $this->customFieldRepository->findByField('custom_field_model', $this->productRepository->model());
        try {
            $product = $this->productRepository->update($input, $id);

            if (isset($input['image']) && $input['image']) {
                $cacheUpload = $this->uploadRepository->getByUuid($input['image']);
                $mediaItem = $cacheUpload->getMedia('image')->first();
                $mediaItem->copy($product, 'image');
            }
            foreach (getCustomFieldsValues($customFields, $request) as $value) {
                $product->customFieldsValues()
                    ->updateOrCreate(['custom_field_id' => $value['custom_field_id']], $value);
            }
        } catch (ValidatorException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($product->toArray(), __('lang.updated_successfully', ['operator' => __('lang.product')]));

    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $product = $this->productRepository->findWithoutFail($id);

        if (empty($product)) {
            return $this->sendError('Product not found');
        }

        $product = $this->productRepository->delete($id);

        return $this->sendResponse($product, __('lang.deleted_successfully', ['operator' => __('lang.product')]));

    }


    public function productsByCategory(Request $request , $id){
       

        try{
            $this->productRepository->pushCriteria(new RequestCriteria($request));
            $this->productRepository->pushCriteria(new LimitOffsetCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfFieldsCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfCategoriesCriteria($request));

            $products = $this->productRepository->productsByCategory($id);

        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }




    public function featuredProductsByCategory(Request $request , $id){
       

        try{
            $this->productRepository->pushCriteria(new RequestCriteria($request));
            $this->productRepository->pushCriteria(new LimitOffsetCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfFieldsCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfCategoriesCriteria($request));

            $products = $this->productRepository->featuredProductsByCategory($id);

        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }

    


    public function bestSellersProductsByCategory(Request $request , $id){
    
        try{
            $this->productRepository->pushCriteria(new RequestCriteria($request));
            $this->productRepository->pushCriteria(new LimitOffsetCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfFieldsCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfCategoriesCriteria($request));

            $products = $this->productRepository->bestSellersProductsByCategory($id);

        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }


    
    public function newArrivalsProductsByCategory(Request $request , $id){
    
        try{
            $this->productRepository->pushCriteria(new RequestCriteria($request));
            $this->productRepository->pushCriteria(new LimitOffsetCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfFieldsCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfCategoriesCriteria($request));

            $products = $this->productRepository->newArrivalsProductsByCategory($id);

        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }
    public function bestSellersCategories(Request $request){
    
        try{
            $this->productRepository->pushCriteria(new RequestCriteria($request));
            $this->productRepository->pushCriteria(new LimitOffsetCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfFieldsCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfCategoriesCriteria($request));

            $categories = $this->productRepository->bestSellersCategories();

        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($categories->toArray(), 'categories retrieved successfully');
    }

    public function filterByPrice(Request $request,$id){
    
        try{
            $this->productRepository->pushCriteria(new RequestCriteria($request));
            $this->productRepository->pushCriteria(new LimitOffsetCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfFieldsCriteria($request));
            $this->productRepository->pushCriteria(new ProductsOfCategoriesCriteria($request));
            $products = $this->productRepository->filterByPrice($request->all(),$id);

        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }

}