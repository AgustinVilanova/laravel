<?php

use Faker\Generator as Faker;
use App\Director;

$factory->define(Director::class, function (Faker $faker) {
    return [
        'first_name'=>$faker->name,
        'last_name'=>$faker->name,
        'birthday'=>$faker->date
    ];
});
