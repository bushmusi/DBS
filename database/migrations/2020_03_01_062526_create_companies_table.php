<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('logoImage')->nullable();
            $table->string('description');
            $table->bigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->string('address');
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('webAddress')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
