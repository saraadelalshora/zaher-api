<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Offer;

class OfferController extends Controller
{
    public function offers()
    {

        try {
            $offer = Offer::with('media')->orderBy('sort', 'asc')->take(3)->get();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
        return $this->sendResponse($offer->toArray(), 'Offer retrieved successfully');
    }
}
