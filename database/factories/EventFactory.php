<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'description' => $faker->sentence(20),
        'image' => $faker->file('C:\Users\Halim\Desktop\image\Emma', public_path('image/event'), false),
    ];
});
