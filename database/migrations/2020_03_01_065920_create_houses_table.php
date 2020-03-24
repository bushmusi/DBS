<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('item_post_id');
            $table->foreign('item_post_id')->references('id')->on('item_posts')->onDelete('cascade');;
            $table->string('size');
            $table->string('type');
            $table->string('bankLoan');
            $table->string('unit');
            $table->string('bed');
            $table->string('bathroom');
            $table->string('parking');
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
        Schema::dropIfExists('houses');
    }
}
