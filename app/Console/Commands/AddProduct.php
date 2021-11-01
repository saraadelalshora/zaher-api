<?php

namespace App\Console\Commands;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Console\Command;

class AddProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Product Date from api to my DB';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $client = new \GuzzleHttp\Client([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'applicatipon/json', 'charset' => 'utf-8']
        ]);
        // Create a request
        $request = $client->get('http://197.246.6.61/APIs/Product.php');
        // Get the actual response without headers
        $response = $request->getBody();
        // empty table 
        Product::query()->delete();
        foreach (json_decode($response->getContents()) as $getContents) {
            $getcategory = Category::where([['Category_Code', $getContents->Category_Code], ['Subcategory_Code', $getContents->Subcategory_code]])->first();
            $category_id = !empty($getcategory) ? $getcategory->id : null;
            $Product = Product::create([
                'name' => $getContents->Product_AR,
                'Product_AR' => $getContents->Product_AR,
                'Product_EN' => $getContents->Product_EN,
                'price' => $getContents->Price,
                'Category_Code' => $getContents->Category_Code,
                'Category' => $getContents->Category,
                'Subcategory_code' => $getContents->Subcategory_code,
                'Subcategory' => $getContents->Subcategory,
                'Product_Id' => $getContents->Product_Id,
                'category_id' => $category_id,
            ]);
        }
        $this->info('All data added Successfully');
    }
}
