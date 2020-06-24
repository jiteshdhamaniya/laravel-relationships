<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

use App\User;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id' => User::pluck('id')->random()
    ];
});
