<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnhandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onhands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Code')->nullable()->index();
            $table->string('qty', 9, 2)->nullable()->default(0);
            $table->integer('market_id')->unsigned()->nullable();
            $table->foreign('market_id')->references('id')->on('markets')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('onhands');
    }
}
