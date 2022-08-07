<?php

use Faker\Generator as Faker;
use App\Models\Offer;


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

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'type_object' => $faker->randomElement(['flat','house']) ,
        'price' => $faker->numberBetween(10,100),
        'type_currency' =>$faker->randomElement(['UAH','USD','EUR']),
        'type_wolls' =>$faker->randomElement(['panel','brick']),
        'room_number' =>random_int(1,4),
//      'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'more_information' =>'more_information',
        'user_id' =>$faker->numberBetween(1,15),
    ];
});
