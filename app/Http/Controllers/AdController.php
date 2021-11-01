<?php

namespace App\Http\Controllers;

use App\DataTables\AdDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAdRequest;
use App\Http\Requests\UpdateAdRequest;
use App\Repositories\AdRepository;
use App\Repositories\CustomFieldRepository;
use App\Repositories\UploadRepository;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Prettus\Validator\Exceptions\ValidatorException;

class AdController extends Controller
{
    /** @var  AdRepository */
    private $adRepository;

    /**
     * @var CustomFieldRepository
     */
    private $customFieldRepository;

    /**
  * @var UploadRepository
  */
private $uploadRepository;

    public function __construct(AdRepository $adRepo, CustomFieldRepository $customFieldRepo , UploadRepository $uploadRepo)
    {
        parent::__construct();
        $this->adRepository = $adRepo;
        $this->customFieldRepository = $customFieldRepo;
        $this->uploadRepository = $uploadRepo;
    }

    /**
     * Display a listing of the Ad.
     *
     * @param AdDataTable $adDataTable
     * @return Response
     */
    public function index(AdDataTable $adDataTable)
    {
        return $adDataTable->render('ads.index');
    }

    /**
     * Show the form for creating a new Ad.
     *
     * @return Response
     */
    public function create()
    {
        
        
        $hasCustomField = in_array($this->adRepository->model(),setting('custom_field_models',[]));
            if($hasCustomField){
                $customFields = $this->customFieldRepository->findByField('custom_field_model', $this->adRepository->model());
                $html = generateCustomField($customFields);
            }
        return view('ads.create')->with("customFields", isset($html) ? $html : false);
    }

    /**
     * Store a newly created Ad in storage.
     *
     * @param CreateAdRequest $request
     *
     * @return Response
     */
    public function store(CreateAdRequest $request)
    {
        $input = $request->all();

        // dd($input);
        // $customFields = $this->customFieldRepository->findByField('custom_field_model', $this->adRepository->model());
        try {
            $ad = $this->adRepository->create($input);
            // $ad->customFieldsValues()->createMany(getCustomFieldsValues($customFields,$request));
            if(isset($input['image']) && $input['image']){
    $cacheUpload = $this->uploadRepository->getByUuid($input['image']);
    $mediaItem = $cacheUpload->getMedia('image')->first();
    $mediaItem->copy($ad, 'image');
}
        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }

        Flash::success(__('lang.saved_successfully',['operator' => __('lang.ad')]));

        return redirect(route('ads.index'));
    }

    /**
     * Display the specified Ad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ad = $this->adRepository->findWithoutFail($id);

        if (empty($ad)) {
            Flash::error('Ad not found');

            return redirect(route('ads.index'));
        }

        return view('ads.show')->with('ad', $ad);
    }

    /**
     * Show the form for editing the specified Ad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ad = $this->adRepository->findWithoutFail($id);
        
        

        if (empty($ad)) {
            Flash::error(__('lang.not_found',['operator' => __('lang.ad')]));

            return redirect(route('ads.index'));
        }
        // $customFieldsValues = $ad->customFieldsValues()->with('customField')->get();
        // $customFields =  $this->customFieldRepository->findByField('custom_field_model', $this->adRepository->model());
        // $hasCustomField = in_array($this->adRepository->model(),setting('custom_field_models',[]));
        // if($hasCustomField) {
        //     $html = generateCustomField($customFields, $customFieldsValues);
        // }

        return view('ads.edit')->with('ad', $ad);
    }

    /**
     * Update the specified Ad in storage.
     *
     * @param  int              $id
     * @param UpdateAdRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdRequest $request)
    {
        $ad = $this->adRepository->findWithoutFail($id);

        if (empty($ad)) {
            Flash::error('Ad not found');
            return redirect(route('ads.index'));
        }
        $input = $request->all();
        // $customFields = $this->customFieldRepository->findByField('custom_field_model', $this->adRepository->model());
        try {
            $ad = $this->adRepository->update($input, $id);
            
            if(isset($input['image']) && $input['image']){
                $cacheUpload = $this->uploadRepository->getByUuid($input['image']);
                $mediaItem = $cacheUpload->getMedia('image')->first();
                $mediaItem->copy($ad, 'image');
            }
            // foreach (getCustomFieldsValues($customFields, $request) as $value){
            //     $ad->customFieldsValues()
            //         ->updateOrCreate(['custom_field_id'=>$value['custom_field_id']],$value);
            // }
        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }

        Flash::success(__('lang.updated_successfully',['operator' => __('lang.ad')]));

        return redirect(route('ads.index'));
    }

    /**
     * Remove the specified Ad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ad = $this->adRepository->findWithoutFail($id);

        if (empty($ad)) {
            Flash::error('Ad not found');

            return redirect(route('ads.index'));
        }

        $this->adRepository->delete($id);

        Flash::success(__('lang.deleted_successfully',['operator' => __('lang.ad')]));

        return redirect(route('ads.index'));
    }

        /**
     * Remove Media of Ad
     * @param Request $request
     */
    public function removeMedia(Request $request)
    {
        $input = $request->all();
        $ad = $this->adRepository->findWithoutFail($input['id']);
        try {
            if($ad->hasMedia($input['collection'])){
                $ad->getFirstMedia($input['collection'])->delete();
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}