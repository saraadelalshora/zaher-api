<?php

namespace App\Http\Controllers\Api;

use App\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Contactcontroller extends Controller
{
    //
    public function send(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        try {
            ContactUs::create($request->all());
            return   $this->sendResponse(true, 'Thanks for contacting us!');
        } catch (\Throwable $th) {
            return $this->sendError('Message not sent', 401);
        }
  
    }
}
