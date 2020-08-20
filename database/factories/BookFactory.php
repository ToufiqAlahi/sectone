<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Library\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(5),
        'author'=> $faker->name,
        'description'=> $faker->sentence(20),
        'type'=>$faker->randomElement(['Computer Science', 'Electrical and Electronics', 'Civil']),
        'total_quantity'  => $faker->randomElement([25,30,40, 50]),
        'available'  => $faker->randomElement([8,19,13]),
        'rack'    => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12]),
        'row'     => $faker->randomElement([1,2,3,4,5]),
        'col'     => $faker->randomElement([1,2,3,4]),
    ];
});
