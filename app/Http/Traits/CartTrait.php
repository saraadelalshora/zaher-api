<?php
namespace App\Http\Traits;
use App\DatabaseStorageModel;
use Darryldecode\Cart\CartCollection;

class CartTrait {

    public function has($key)
    {
        return DatabaseStorageModel::find($key);
    }

    public function get($key)
    {
        if($this->has($key))
        {

            $cart = DatabaseStorageModel::find($key)->cart_data;
            return unserialize($cart);
        }
        else
        {
            return [];
        }
    }

    public function put($key, $value)
    {
        if($row = DatabaseStorageModel::find($key))
        {
            // update
            $row->cart_data = $value;
            $row->save();
        }
        else
        {
            DatabaseStorageModel::create([
                'id' => $key,
                'cart_data' => $value
            ]);
        }
    }


    public function destory($id){
           if($row = DatabaseStorageModel::find($id))
            {

                $row->delete();
            }
      
    }
}