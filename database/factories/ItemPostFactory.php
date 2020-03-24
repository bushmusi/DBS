<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\User;
use App\City;
use App\ItemType;
use App\ItemPost;
use App\Car;
use App\House;
use App\Picture;
use App\WishList;


$factory->define(WishList::class,function(Faker $faker){
    return [
        'userID' => $faker->numberBetween($min = 1, $max = 100),
    ];
});


$factory->define(ItemPost::class, function (Faker $faker) {
    return [
        'userID' => $faker->numberBetween($min = 1, $max = 100),
        'title' => $faker->title,
        'itemName' => $faker->name,
        'itemPrice' =>  $faker->randomDigit,
        'itemTypeID' => $faker->randomElement([
            ItemType::METHOD_ITEM_TYPE_1,
            ItemType::METHOD_ITEM_TYPE_2,
        ]),
        'sellerType' => $faker->randomElement([
            ItemPost::METHOD_SELLER_TYPE_1,
            ItemPost::METHOD_SELLER_TYPE_2,
            ItemPost::METHOD_SELLER_TYPE_3,
        ]),
        'cityID' => $faker->randomElement([
            City::METHOD_CITY_ID_1,
            City::METHOD_CITY_ID_2,
            City::METHOD_CITY_ID_3,
            City::METHOD_CITY_ID_4,
            City::METHOD_CITY_ID_5,
        ]),
    ];
});


//'model','transmition','year','engineType','condition','bodyType','iccType','color','colorCondition'];
$factory->define(Car::class, function (Faker $faker) {
    return [
        'model' => $faker->randomElement([
            Car::METHOD_MODEL_1,
            Car::METHOD_MODEL_2,
            Car::METHOD_MODEL_3,
            Car::METHOD_MODEL_4,
            Car::METHOD_MODEL_5,
            Car::METHOD_MODEL_6,
            Car::METHOD_MODEL_7,
        ]),
        'transmition' => $faker->randomElement([
            Car::METHOD_TRANSMITION_1,
            Car::METHOD_TRANSMITION_2,
            Car::METHOD_TRANSMITION_3,
        ]),
        'year' => $faker->randomElement([
            Car::year_1,
            Car::year_2,
            Car::year_3,
        ]),
        'engineType' => $faker->randomElement([
            Car::engineType_1,
            Car::engineType_2,
        ]),
        'condition' => $faker->randomElement([
            Car::condition_1,
            Car::condition_2,
            Car::condition_3,

        ]),
        'bodyType' => $faker->randomElement([
            Car::BODY_TYPE_1,
            Car::BODY_TYPE_2,
            Car::BODY_TYPE_3,
            Car::BODY_TYPE_4,
        ]),
        'color' => $faker->randomElement([
            Car::COLOR_1,
            Car::COLOR_2,
            Car::COLOR_3,
            Car::COLOR_4,
        ])
    ];
});

$factory->define(House::class, function (Faker $faker) {
    return [
        //['size','type','bankLoan','unit','bed','bathroom','parking'
        'size' => $faker->numberBetween($min = 150, $max = 500),
        'type' => $faker->randomElement([
            House::TYPE_1,
            House::TYPE_2,
            House::TYPE_3,
        ]),
        'bankLoan' => $faker->randomElement([
            House::BANK_loan_1,
            House::BANK_loan_2,
        ]),
        'unit' => $faker->numberBetween($min = 1, $max = 6),
        'bed' => $faker->numberBetween($min = 1, $max = 6),
        'bathroom' => $faker->numberBetween($min = 1, $max = 6),
        'parking' => $faker->randomElement(['Yes','No']),

    ];
});

$factory->define(Picture::class ,function (Faker $faker) {
    return [
    ];
});


$factory->state(Picture::class, 'car' ,function (Faker $faker) {
    return [
        'image' => $faker->randomElement([
            'c-1.png',
            'c-2.png',
            'c-3.png',
            'c-4.png',
            'c-5.png',
        ])
    ];
});

$factory->state(Picture::class, 'house_mall' ,function (Faker $faker) {
    return [
        'image' => $faker->randomElement([
            'mall-1.png',
            'mall-2.png',
            'mall-3.png',
        ])
    ];
});

$factory->state(Picture::class, 'house_apartama' ,function (Faker $faker) {
    return [
        'image' => $faker->randomElement([
            'a-1.png',
            'a-2.png',
            'a-3.png',
            'a-4.png',
        ])
    ];
});

$factory->state(Picture::class, 'house_real_estate' ,function (Faker $faker) {
    return [
        'image' => $faker->randomElement([
            'r-1.png',
            'r-2.png',
            'r-3.png',
            'r-4.png',
        ])
    ];
});
