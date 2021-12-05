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

       public function app_setting_global(){
            
        try{
            $setting = setting()->all();
    
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    
        return $this->sendResponse($setting, 'Settings retrieved successfully');
    
       }
}
