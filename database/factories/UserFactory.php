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

$factory->define(App\Models\Users\User::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'name' => $faker->name,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'phone_num' => $faker->phoneNumber,
        'picture' => "https://yt3.ggpht.com/-Y3vJZoNm9IQ/AAAAAAAAAAI/AAAAAAAAAAA/CPnjCbRIvbg/s48-c-k-no-mo-rj-c0xffffff/photo.jpg",
        'youtube_url' => "https://www.youtube.com/channel/UC06giNmRHIoep-v6kg6xz9Q?view_as=subscriber",
        'location' => $faker->address,
        'remember_token' => Str::random(10),
    ];
});

