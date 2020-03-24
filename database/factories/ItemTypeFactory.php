<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\ItemType;

$factory->define(ItemType::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement([
            ItemType::METHOD_ITEM_TYPE_NAME_1,
            ItemType::METHOD_ITEM_TYPE_NAME_2,
        ]),
    ];
});
