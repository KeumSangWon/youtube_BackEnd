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

$factory->define(App\Models\Categories\Salary::class, function (Faker $faker) {

    $item = ['100 이상', '200 이상', '300 이상', '400 이상', '500 이상', '추후협의'];
    $num = $faker->numberBetween(0,5);

    return [
        'salary_item' => $item[$num],
    ];
});