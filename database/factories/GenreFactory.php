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

$factory->define(App\Models\Categories\Genre::class, function (Faker $faker) {

    $item = ['Vlog', 'Game', 'Mukbang','ASMR', 'Review', 'Exercise', 'Tech', 'News', 'Music', 'Etc'];
    $num = $faker->numberBetween(0,3);

    return [
        'genre_name' => $item[$num],
    ];
});