<?php

namespace App\Console\Commands;

use App\Onhand;
use App\Models\Market;
use App\Models\Product;
use Illuminate\Console\Command;

class OnHands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'onhand:new  {branchs : The ID of the branchs}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get update quantity {branchs : The ID of the branchs}';

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

        $findmarket = Market::where('Branch_ID', $this->argument('branchs'))->first();
        $market_id = !empty($findmarket) ? $findmarket->id : null;
        if (!empty($findmarket)) {
        $client = new \GuzzleHttp\Client([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'applicatipon/json', 'charset' => 'utf-8', 'connect_timeout' => 120]
        ]);
        // Create a request
        $request = $client->get('http://197.246.6.61/APIs/onhand.php?branch='. $this->argument('branchs'));
        // Get the actual response without headers
        $response = $request->getBody();
        // empty table 

      

            foreach (json_decode($response->getContents()) as $getContents) {
               
                $getcategory = Product::where('Product_Id', $getContents->Code)->first();
                $category_id = !empty($getcategory) ? $getcategory->id : null;
               
                    Onhand::updateOrCreate(
                        [
                            'productid' => $category_id,
                            'code' => $getContents->Code,
                        ],
                        [
                            'productid' => $category_id,
                            'market_id' => $market_id,
                            'qty'       => $getContents->qty,
                            'code'      => $getContents->Code,
                        ]
                    );
                
               
            }
            $this->info('All data added Successfully');
        }else{
            $this->info('Not Found Branch');
        }
       
    }
}
