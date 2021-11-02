<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FullDatabaseController extends Controller
{
    //
    public function branches(Request $request){
        $client = new \GuzzleHttp\Client([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'applicatipon/json', 'charset' => 'utf-8']
        ]);
        // Create a request
        $request = $client->get('https://197.246.6.61/APIs/branchs.php');
        // Get the actual response without headers
        $response = $request->getBody();
        // empty table 
        Market::query()->delete();
        foreach (json_decode($response->getContents()) as $getContents){
            $market = Market::create([
                'name'=> $getContents->Barnch_AR,
                'latitude'=>'0',
                'longitude'=>'0',
                'Branch_EN'=>$getContents->Branch_EN,
                'Branch_ID'=>$getContents->Branch_ID,
             ]);
          
        }
        return response([['branches' => Market::all()],['massage'=>'Add successfully']],200);
    }
    public function Category(Request $request){
        $client = new \GuzzleHttp\Client([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'applicatipon/json', 'charset' => 'utf-8']
        ]);
        // Create a request
        $request = $client->get('https://197.246.6.61/APIs/categorys.php');
        // Get the actual response without headers
        $response = $request->getBody();
  
        Category::query()->delete();
        foreach (json_decode($response->getContents()) as $getContents){
         
          Category::create([
                'name'=> $getContents->Subcategoy_AR,
                'Category_Code'=> $getContents->Category_Code,
                'Category_AR'=> $getContents->Category_AR,
                'Category_EN'=> $getContents->Category_EN,
                'Subcategory_Code'=>$getContents->Subcategory_Code,
                'Subcategoy_AR'=>$getContents->Subcategoy_AR,
                'Subcategoy_EN'=> $getContents->Subcategoy_EN,
             ]);
          
        }
        return response([['branches' => Category::all()],['massage'=>'Add successfully']],200);
    }
    public function product(Request $request){
        $client = new \GuzzleHttp\Client([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'applicatipon/json', 'charset' => 'utf-8']
        ]);
        // Create a request
        $request = $client->get('https://197.246.6.61/APIs/Product.php');
        // Get the actual response without headers
        $response = $request->getBody();
        // empty table 
        Product::query()->delete();
        foreach (json_decode($response->getContents()) as $getContents){
            $getcategory= Category::where([['Category_Code', $getContents->Category_Code], ['Subcategory_Code', $getContents->Subcategory_code]])->first();
            $category_id= !empty($getcategory)? $getcategory->id : null;
            $Product = Product::create([
                'name'=> $getContents->Product_AR,
                'Product_AR'=> $getContents->Product_AR,
                'Product_EN'=> $getContents->Product_EN,
                'price'=> $getContents->Price,
                'Category_Code'=>$getContents->Category_Code,
                'Category'=>$getContents->Category,
                'Subcategory_code'=>$getContents->Subcategory_code,
                'Subcategory'=>$getContents->Subcategory,
                'Product_Id'=>$getContents->Product_Id,
                'category_id'=> $category_id,
             ]);
          
        }
        return response([['branches' => Product::all()],['massage'=>'Add successfully']],200);
    }
}
