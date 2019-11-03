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

$factory->define(Recruit_genre::class, function (Faker $faker) {

    $recruit_id_min = App\Models\Recruits\Recruit::min('id');
    $recruit_id_max = App\Models\Recruits\Recruit::max('id');

    $genre_id_min = App\Models\Categories\Genre::min('id');
    $genre_id_max = App\Models\Categories\Genre::max('id');

    return [
        'recruit_id' =>  $faker->numberBetween($recruit_id_min, $recruit_id_max),
        'genre_id' =>  $faker->numberBetween($genre_id_min, $genre_id_max),
    ];
});