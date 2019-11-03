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

$factory->define(App\Models\Categories\Career::class, function (Faker $faker) {

    $item = ['Newcomer', '1~2Years or more', '3~4years or more','5years or more'];
    $num = $faker->numberBetween(0,3);

    return [
        'career_item' => $item[$num],
    ];
});