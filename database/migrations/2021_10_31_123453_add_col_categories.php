<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories',  function (Blueprint $table) {
            $table->integer('Category_Code')->nullable()->index();
            $table->string('Category_AR')->nullable();
            $table->string('Category_EN')->nullable();
            $table->integer('Subcategory_Code')->nullable()->index();
            $table->string('Subcategoy_AR')->nullable();
            $table->string('Subcategoy_EN')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories',  function (Blueprint $table) {
            $table->dropIndex(['Category_Code']);
            $table->dropIndex(['Subcategory_Code']);
            $table->dropColumn('Category_Code');
            $table->dropColumn('Category_AR');
            $table->dropColumn('Category_EN');
            $table->dropColumn('Subcategory_Code');
            $table->dropColumn('Subcategoy_AR');
            $table->dropColumn('Subcategoy_EN');
        });
    }
}
