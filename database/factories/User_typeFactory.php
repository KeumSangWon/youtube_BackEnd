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

$factory->define(App\Models\Users\User_type::class, function (Faker $faker) {

    $user_id_min = App\Models\Users\User::min('id');
    $user_id_max = App\Models\Users\User::max('id');

    $type_id_min = App\Models\Users\Type::min('id');
    $type_id_max = App\Models\Users\Type::max('id');

    return [
        'user_id' =>  $faker->numberBetween($user_id_min, $user_id_max),
        'type_id' => $faker->numberBetween($type_id_min, $type_id_max),
    ];
});