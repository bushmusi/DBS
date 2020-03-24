<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('item_post_id')->unsigned();
            $table->foreign('item_post_id')->references('id')->on('item_posts')->onDelete('cascade');;
            $table->string('model');
            $table->string('transmition');
            $table->string('year');
            $table->string('engineType');
            $table->string('condition');
            $table->string('bodyType');
            $table->string('iccType')->nullable();
            $table->string('color');
            $table->string('colorCondition')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
