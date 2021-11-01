<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewpricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newprices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Product_Id')->nullable()->index();
            $table->string('Baroce')->nullable()->index();
            $table->string('New_Price')->nullable()->index();
            $table->string('Old_Price')->nullable()->index();
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
        Schema::dropIfExists('newprices');
    }
}
