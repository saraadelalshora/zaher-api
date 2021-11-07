<?php

namespace App\Http\Controllers;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\DataTables\OfferDataTable;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\CreateOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Repositories\OfferRepository;
use App\Repositories\UploadRepository;
use Prettus\Validator\Exceptions\ValidatorException;

class OfferController extends Controller
{
    /** @var  OfferRepository */
    private $OfferRepository;


    /**
     * @var UploadRepository
     */
    private $uploOfferRepository;

    public function __construct(OfferRepository $offerRepo,  UploadRepository $uploadRepo)
    {
        parent::__construct();
        $this->OfferRepository = $offerRepo;
        $this->uploOfferRepository = $uploadRepo;
    }

    /**
     * Display a listing of the Ad.
     *
     * @param OfferDataTable $OfferDataTable
     * @return Response
     */
    public function index(OfferDataTable $OfferDataTable)
    {
        return $OfferDataTable->render('offer.index');
    }

    /**
     * Show the form for creating a new Ad.
     *
     * @return Response
     */
    public function create()
    {

        return view('offer.create')->with("customFields", isset($html) ? $html : false);
    }

    /**
     * Store a newly created Ad in storage.
     *
     * @param CreateAdRequest $request
     *
     * @return Response
     */
    public function store(CreateOfferRequest $request)
    {
        $input = $request->all();


        try {
            $offer = $this->OfferRepository->create($input);
            if (isset($input['image']) && $input['image']) {
                $cacheUpload = $this->uploOfferRepository->getByUuid($input['image']);
                $mediaItem = $cacheUpload->getMedia('image')->first();
                $mediaItem->copy($offer, 'image');
            }
        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }

        Flash::success(__('lang.saved_successfully', ['operator' => __('lang.offer')]));

        return redirect(route('offer.index'));
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
        $offer = $this->OfferRepository->findWithoutFail($id);

        if (empty($offer)) {
            Flash::error('Offer not found');

            return redirect(route('offer.index'));
        }

        return view('offer.show')->with('offer', $offer);
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
        $offer = $this->OfferRepository->findWithoutFail($id);



        if (empty($offer)) {
            Flash::error(__('lang.not_found', ['operator' => __('lang.offer')]));

            return redirect(route('offer.index'));
        }

        return view('offer.edit')->with('offer', $offer);
    }

    /**
     * Update the specified Ad in storage.
     *
     * @param  int              $id
     * @param UpdateOfferRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOfferRequest $request)
    {
        $offer = $this->OfferRepository->findWithoutFail($id);

        if (empty($offer)) {
            Flash::error('Offer not found');
            return redirect(route('offer.index'));
        }
        $input = $request->all();
         try {
            $offer = $this->OfferRepository->update($input, $id);

            if (isset($input['image']) && $input['image']) {
                $cacheUpload = $this->uploOfferRepository->getByUuid($input['image']);
                $mediaItem = $cacheUpload->getMedia('image')->first();
                $mediaItem->copy($offer, 'image');
            }

        } catch (ValidatorException $e) {
            Flash::error($e->getMessage());
        }

        Flash::success(__('lang.updated_successfully', ['operator' => __('lang.ad')]));

        return redirect(route('offer.index'));
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
        $offer = $this->OfferRepository->findWithoutFail($id);

        if (empty($offer)) {
            Flash::error('offer not found');

            return redirect(route('offer.index'));
        }

        $this->OfferRepository->delete($id);

        Flash::success(__('lang.deleted_successfully', ['operator' => __('lang.offer')]));

        return redirect(route('offer.index'));
    }

    /**
     * Remove Media of Ad
     * @param Request $request
     */
    public function removeMedia(Request $request)
    {
        $input = $request->all();
        $offer = $this->OfferRepository->findWithoutFail($input['id']);
        try {
            if ($offer->hasMedia($input['collection'])) {
                $offer->getFirstMedia($input['collection'])->delete();
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
