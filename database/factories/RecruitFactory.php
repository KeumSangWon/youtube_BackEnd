<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model\Recruit\Recruit;
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

$factory->define(App\Models\Recruits\Recruit::class, function (Faker $faker) {

    $recruitment_id_min = App\Models\Categories\Recruitment::min('id');
    $recruitment_id_max = App\Models\Categories\Recruitment::max('id');
    
    $career_id_min = App\Models\Categories\Career::min('id');
    $career_id_max = App\Models\Categories\Career::max('id');

    $salary_id_min = App\Models\Categories\Salary::min('id');
    $salary_id_max = App\Models\Categories\Salary::max('id');

    $gender_id_min = App\Models\Categories\Gender::min('id');
    $gender_id_max = App\Models\Categories\Gender::max('id');

    return [
        'user_id' =>  function () {
            return factory(App\Models\Users\User::class)->create()->id;
        },
        'title' => 'test',
        'salary_id' => $faker->numberBetween($salary_id_min, $salary_id_max),
        'career_id' => $faker->numberBetween($career_id_min, $career_id_max),
        'recruitment_id' => $faker->numberBetween($recruitment_id_min, $recruitment_id_max),
        'gender_id' => $faker->numberBetween($gender_id_min, $gender_id_max),
        'video_file' => 'https://www.youtube.com/embed/OoQd7T5iR_o',
        'textra' => "test test test test test test test test"
    ];
});