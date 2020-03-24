<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Company;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' =>  Hash::make('123456789'), // password Hash::make($data['password']),
        'remember_token' => Str::random(10),
        'userTypeId' => $faker->numberBetween($min=1,$max=5),
    ];
});

$factory->define(Company::class,function(Faker $faker){
    return [//'name', 'logoImage', 'description','city_id','webAddress','address' => ,'phone'
        'name' => $faker->bs,
        'logoImage' => $faker->randomElement([
            'p-1.png',
            'p-2.png',
            'p-3.png',
            'p-4.png',
        ]),
        'description' => $faker->text,
        'city_id' => $faker->numberBetween($min=1,$max=9),
        'webAddress' => 'https://laravel.com/docs/5.8/database-testing',
        'address' => $faker->address,
        'phone' => $faker->e164PhoneNumber,
    ];
});

