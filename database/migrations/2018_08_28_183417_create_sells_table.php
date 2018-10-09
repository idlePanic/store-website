<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('sell_user',function (Blueprint $table){
           $table->increments('id');
           $table->integer('sell_id')->unsigned()->nullable();
           $table->foreign('sell_id')->references('id')
               ->on('sells')->onDelete('cascade')->onUpdate('cascade');
           $table->integer('user_id')->unsigned()->nullable();
           $table->foreign('user_id')->references('id')
               ->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sell');
    }
}
