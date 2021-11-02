<?php

namespace App\Console\Commands;

use App\Models\Product;
use App\NewPrice as Price;
use Illuminate\Console\Command;

class NewPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'price:new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update new price liat';

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
        $client = new \GuzzleHttp\Client([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'applicatipon/json', 'charset' => 'utf-8', 'connect_timeout' => 120]
        ]);
        // Create a request
        $request = $client->get('http://197.246.6.61/APIs/newprices.php');
        // Get the actual response without headers
        $response = $request->getBody();
        // empty table 
        
        foreach (json_decode($response->getContents()) as $getContents) {
            $getcategory = Product::where('Product_Id', $getContents->Product_Id)->first();
            $category_id = !empty($getcategory) ? $getcategory->id : null;

            Price::updateOrCreate(
            [
                'productid' => $category_id,
                'Product_Id' => $getContents->Product_Id,
            ],
            [
                'productid' => $category_id,
                'Baroce' => $getContents->Baroce,
                'New_Price' => $getContents->New_Price,
                'Old_Price' => $getContents->Old_Price,
                'Product_Id' => $getContents->Product_Id,
            ]);
        }
        $this->info('All data added Successfully');
    }
}
