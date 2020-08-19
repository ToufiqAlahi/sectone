<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'image'=>$faker->file('C:\Users\Halim\Desktop\image\Hijab', public_path('image/teacher'), false),
        'department_id'=> 101,
        'teacher_type' => 'permanent',
    ];
});
