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

$factory->define(App\Models\Categories\Language::class, function (Faker $faker) {

    $item = ['English', 'Chinese', 'Japanese', 'Korean', 'Russian', 'Spanish', 'Another language'];
    $num = $faker->numberBetween(0,6);

    return [
        'language_name' => $item[$num],
    ];
});