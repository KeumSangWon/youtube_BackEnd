<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Modesl\Videos\Video;
use App\Models\Videos\Video_genre;
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

$factory->define(Video_genre::class, function (Faker $faker) {

    $video_id_min = App\Models\Videos\Video::min('id');
    $video_id_max = App\Models\Videos\Video::max('id');

    $genre_id_min = App\Models\Categories\Genre::min('id');
    $genre_id_max = App\Models\Categories\Genre::max('id');

    return [
        'video_id' =>  $faker->numberBetween($video_id_min, $video_id_max),
        'genre_id' => $faker->numberBetween($genre_id_min, $genre_id_max),
    ];
});