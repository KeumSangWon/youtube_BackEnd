<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model\User\User;
use App\Model\Video\Video;
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

$factory->define(App\Models\Videos\Good::class, function (Faker $faker) {

    $video_id_min = App\Models\videos\Video::min('id');
    $video_id_max = App\Models\videos\Video::max('id');

    $user_id_min = App\Models\Users\User::min('id');
    $user_id_max = App\Models\Users\User::max('id');

    return [
        'video_id' =>  $faker->numberBetween($video_id_min, $video_id_max),
        'user_id' => $faker->numberBetween($user_id_min, $user_id_max),
    ];
});