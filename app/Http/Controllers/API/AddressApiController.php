<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\DeliveryAddress;
use App\Http\Controllers\Controller;

class AddressApiController extends Controller
{
  
    

    public function createAddresses(Request $request){
      
        $this->validate($request, [
            'description' => ['nullable','string','max:255'],
            'address'     => ['required','string','max:255'],
            'is_default'  => ['required','in:0,1'],
            'lat'         => ['required','numeric'],
            'lng'         => ['required','numeric']
 
        ]);

        try {
            if($request->is_default == 1){
                DeliveryAddress::where('user_id',auth()->user()->id)->update([
                    'is_default' => 0
                ]);
            }
            $address = DeliveryAddress::create([
                'description' => $request->description,
                'address'     => $request->address,
                'is_default'  => $request->is_default, 
                'user_id'     => auth()->user()->id, 
                'latitude'    => $request->lat,
                'longitude'   => $request->lng,
            ]);
    
            
    
            return $this->sendResponse($address, 'Address Created Successfully');
        } catch (\Exception $e) {
            return $this->sendError('Something Went Wrong', 401);
        }

     
    }


    public function updateAddresses(Request $request,$id){
        $address = DeliveryAddress::where('user_id',auth()->user()->id)->where('id',$id)->firstOrFail();
        $this->validate($request, [
            'description' => ['nullable','string','max:255'],
            'address'     => ['required','string','max:255'],
            'is_default'  => ['required','in:0,1'],
            'lat'         => ['required','numeric'],
            'lng'         => ['required','numeric']
      
            
        ]);

        try {
            if($request->is_default == 1){
                DeliveryAddress::where('user_id',auth()->user()->id)->where('id','!=',$address->id)->update([
                    'is_default' => 0
                ]);
            }
     
           $address->update([
                'description' => $request->description,
                'address'     => $request->address,
                'is_default'  => $request->is_default, 
                'latitude'    => $request->lat,
                'longitude'   => $request->lng,
               
            ]);
    
            
    
            return $this->sendResponse($address, 'Address Modified Successfully');
        } catch (\Exception $e) {
            return $this->sendError('Something Went Wrong'.$e->getMessage(), 401);
        }

     
    }


    public function deleteAddresses(Request $request,$id){
 
             DeliveryAddress::where('user_id',auth()->user()->id)->where('id',$id)->firstOrFail()
            ->delete();
            return $this->sendResponse('', 'Address Deleted Successfully');
     
    }


    public function getAddresses(Request $request){
 
        $addresses =  DeliveryAddress::where('user_id',auth()->user()->id)->get();
        return $this->sendResponse($addresses->toArray(), 'Address retierved Successfully');
 
}
}