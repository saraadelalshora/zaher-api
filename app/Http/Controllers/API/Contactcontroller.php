<?php

namespace App\Http\Controllers\Api;

use App\ContactUs;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
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
            $data=[
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'message' => $request->message,
            ];
            ContactUs::create($request->all());
            Mail::to('admin@zaherdriay.com')->send(new ContactMail($data));

            return   $this->sendResponse(true, 'Thanks for contacting us!');
        } catch (\Throwable $th) {
            return $this->sendError('Message not sent', 401);
        }
  
    }
}
