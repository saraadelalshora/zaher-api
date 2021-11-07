<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Product_Id')->nullable()->index();
            $table->string('Prom_no')->nullable()->index();
            $table->string('Prom_Type')->nullable()->index();
            $table->string('Prom_Price')->nullable()->index();
            $table->string('Normal_Price')->nullable()->index();
            $table->string('Status')->nullable()->index();
            $table->string('Prom_Description')->nullable()->index();
            $table->string('Start_date')->nullable()->index();
            $table->string('End_date')->nullable()->index();
            $table->integer('productid')->unsigned()->nullable();
            $table->foreign('productid')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
