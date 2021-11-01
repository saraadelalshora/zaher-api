<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('Category_Code')->nullable()->index();
            $table->string('Category')->nullable();
            $table->integer('Subcategory_code')->nullable()->index();
            $table->string('Subcategory')->nullable();
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
            $table->dropIndex(['Category_Code']);
            $table->dropIndex(['Subcategory_code']);
            $table->dropColumn('Category_Code');
            $table->dropColumn('Category');
            $table->dropColumn('Subcategory_code');
            $table->dropColumn('Subcategory');
        });
    }
}
