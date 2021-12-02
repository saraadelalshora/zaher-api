<?php
/**
 * File name: ProductRepository.php
 * Last modified: 2020.06.07 at 07:02:57
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2020
 *
 */

namespace App\Repositories;

use App\Models\Product;
use App\Models\Category;
use InfyOm\Generator\Common\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;
use Prettus\Repository\Contracts\CacheableInterface;

/**
 * Class ProductRepository
 * @package App\Repositories
 * @version August 29, 2019, 9:38 pm UTC
 *
 * @method Product findWithoutFail($id, $columns = ['*'])
 * @method Product find($id, $columns = ['*'])
 * @method Product first($columns = ['*'])
 */
class ProductRepository extends BaseRepository implements CacheableInterface
{

    use CacheableRepository;
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'price',
        'discount_price',
        'description',
        'capacity',
        'package_items_count',
        'deliverable',
        'unit',
        'featured',
        'market_id',
        'category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
   
        
        return Product::class;
    }

    /**
     * get my products
     **/
    public function myProducts()
    {
        return Product::join("user_markets", "user_markets.market_id", "=", "products.market_id")
            ->where('user_markets.user_id', auth()->id())->get();
    }

    public function groupedByMarkets()
    {
        $products = [];
        foreach ($this->where('market_id','!=',null)->get() as $model) {
            if(!empty($model->market)){
               $products[$model->market->name][$model->id] = $model->name;
             }
        }
        return $products;
    }


    public function productsByCategory($id){
        $products = Product::with('category')->where('category_id',$id)->paginate(15);
        return $products;
    }
    public function featuredProductsByCategory($id){
        $products = Product::with('category')->where('featured',true)->where('category_id',$id)->paginate(15);
        return $products;
    }
    public function bestSellersProductsByCategory($id){
        $products = Product::with('category')->where('category_id',$id)->orderBy('sells_count','DESC')->paginate(15);
        return $products;
    }
    public function newArrivalsProductsByCategory($id){
        $products = Product::with('category')->where('category_id',$id)->orderBy('created_at','DESC')->paginate(15);
        return $products;
    }
    public function bestSellersCategories(){
        $categories = Category::withSum('products.sells_count')->orderBy('products_sells_count_sum','DESC')->take(6)->get();
        return $categories;
    }
}