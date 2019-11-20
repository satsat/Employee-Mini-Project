<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Salary;
use Faker\Generator as Faker;

$factory->define(Salary::class, function (Faker $faker) {
    return [
        'nAmount'=>$faker->numberBetween(20000, 100000),
    ];
});
