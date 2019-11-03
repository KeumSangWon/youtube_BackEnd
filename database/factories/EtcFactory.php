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

$factory->define(App\Models\Categories\Etc::class, function (Faker $faker) {

    $item = ['이사가능', '장비있음', '장비없음', '야간가능', '기타등등'];
    $num = $faker->numberBetween(0,4);

    return [
        'etc_category' => $item[$num],
    ];
});