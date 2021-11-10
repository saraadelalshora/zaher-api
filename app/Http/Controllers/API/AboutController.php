<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
class AboutController extends Controller
{
    //
    public function about(){

        try{
            $ads = About::first();
    
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    
        return $this->sendResponse($ads, 'about retrieved successfully');
    
       }
}
