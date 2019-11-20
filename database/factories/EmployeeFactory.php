<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;


use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
    	'sFirstName'=>$faker->firstName,
    	'sLastName'=>$faker->lastName,
    	'sEmail' => $faker->unique()->safeEmail,
    	'nContact'=>$faker->numberBetween(8000000000, 9900000000),
    	'nSid'=>$faker->numberBetween(1,20),
    	'nDid'=>$faker->numberBetween(1,10),
    	'dJoiningDate'=>$faker->dateTimeBetween('2000-01-01', '2019-10-31')
    ->format('Y-m-d'),
    	'dDateOfBirth'=>$faker->dateTimeBetween('1965-01-01', '2019-10-31')
    ->format('Y-m-d'),
    ];
});
