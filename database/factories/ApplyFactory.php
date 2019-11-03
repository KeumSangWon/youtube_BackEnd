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

$factory->define(App\Models\Recruits\Apply::class, function (Faker $faker) {

    $recruit_id_min = App\Models\Recruits\Recruit::min('id');
    $recruit_id_max = App\Models\Recruits\Recruit::max('id');

    $user_id_min = App\Models\Users\User::min('id');
    $user_id_max = App\Models\Users\User::max('id');

    return [
        'recruit_id' =>  $faker->numberBetween($recruit_id_min, $recruit_id_max),
        'user_id' =>  $faker->numberBetween($user_id_min, $user_id_max),
        'check_compleat' => $faker->boolean
    ];
});