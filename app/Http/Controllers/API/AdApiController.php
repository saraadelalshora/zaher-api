<?php

namespace App\Http\Controllers\API;

use App\Ad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdApiController extends Controller
{
   public function topAds(){

    try{
        $ads = Ad::where('position','top')->where('status','active')->orderBy('sort','asc')->take(3)->get();

    } catch (\Exception $e) {
        return $this->sendError($e->getMessage());
    }

    return $this->sendResponse($ads->toArray(), 'Top Ads retrieved successfully');

   }
   public function bottomAds(){
    try{
        $ads = Ad::where('position','bottom')->where('status','active')->orderBy('sort','asc')->take(3)->get();

    } catch (\Exception $e) {
        return $this->sendError($e->getMessage());
    }

    return $this->sendResponse($ads->toArray(), 'Bottom Ads retrieved successfully');
   }
}