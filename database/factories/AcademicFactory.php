<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use Faker\Generator as Faker;
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

$factory->define(App\Models\Categories\Academic::class, function (Faker $faker) {

    $item = ['High school graduates', 'being in college', 'College graduates'];
    $num = $faker->numberBetween(0,2);

    return [
        'academic_category' => $item[$num],
    ];
});