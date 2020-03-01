<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('userID')->unsigned();
            $table->foreign('userID')->references('id')->on('users');
            $table->string('title');
            $table->string('itemName');
            $table->string('itemPrice');
            $table->bigInteger('itemTypeID')->unsigned();
            $table->foreign('itemTypeID')->references('id')->on('item_types');
            $table->string('sellerType');
            $table->bigInteger('cityID')->unsigned();
            $table->foreign('cityID')->references('id')->on('cities');
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
        Schema::dropIfExists('item_posts');
    }
}
