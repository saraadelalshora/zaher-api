<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCol2ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->string('Product_AR')->nullable();
            $table->string('Product_EN')->nullable();
            $table->integer('Product_Id')->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropColumn('Product_AR');
            $table->dropColumn('Product_EN');
            $table->dropIndex(['Product_Id']);
            $table->dropColumn('Product_Id');
        });
    }
}
