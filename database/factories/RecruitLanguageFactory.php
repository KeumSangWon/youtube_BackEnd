<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Recruits\Recruit;
use App\Models\Recruits\Recruit_genre;
use App\Models\Categories\Genre;
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

$factory->define(App\Models\Recruits\Recruit_language::class, function (Faker $faker) {

    $recruit_id_min = App\Models\Recruits\Recruit::min('id');
    $recruit_id_max = App\Models\Recruits\Recruit::max('id');

    $language_id_min = App\Models\Categories\Language::min('id');
    $language_id_max = App\Models\Categories\Language::max('id');

    return [
        'recruit_id' =>  $faker->numberBetween($recruit_id_min, $recruit_id_max),
        'language_id' =>  $faker->numberBetween($language_id_min, $language_id_max),
    ];
});