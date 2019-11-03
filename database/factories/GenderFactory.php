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

$factory->define(App\Models\Categories\Gender::class, function (Faker $faker) {

    $item = ['Men', 'Woman', 'Nothing'];
    $num = $faker->numberBetween(0,2);

    return [
        'gender_item' => $item[$num],
    ];
});