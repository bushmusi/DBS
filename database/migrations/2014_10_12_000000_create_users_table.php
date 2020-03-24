<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('ipAddress')->nullable();
            $table->integer('role')->nullable()->default('1');
            $table->string('gender')->default('Male');
            $table->string('fName')->default('Name');
            $table->string('lName')->default('Name');
            $table->string('mName')->default('Name');
            $table->string('phone')->default('Name');
            $table->bigInteger('userTypeId')->unsigned()->default(1);
            $table->foreign('userTypeId')->references('id')->on('userTypes')->onDelete('cascade');;
            $table->string('paymentStatus')->default('Unpaid');
            $table->string('deleted_at')->default('');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
