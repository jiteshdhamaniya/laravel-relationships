<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => (\App\Post::inRandomOrder()->limit(1)->pluck('id'))[0],
        'content'=> $faker->realText()
    ];
});
