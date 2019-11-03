<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Videos\Video;
use App\Models\Users\User;
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

$factory->define(Video::class, function (Faker $faker) {
    return [
        'user_id' =>  function () {
            return factory(App\Models\Users\User::class)->create()->id;
        },
        'title' => $faker->word,
        'video_url' => "https://www.youtube.com/embed/OoQd7T5iR_o",
        'video_file' => "https://www.youtube.com/embed/OoQd7T5iR_o",
        'textarea' => "test test test test test test test test test test test test test test test test test "
    ];
});