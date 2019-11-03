<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model\Recruit\Recruit;
use App\Model\Recruit\Recruit_academic;
use App\Model\Category\Academic;
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

$factory->define(App\Models\Recruits\Recruit_academic::class, function (Faker $faker) {

    $recruit_id_min = App\Models\Recruits\Recruit::min('id');
    $recruit_id_max = App\Models\Recruits\Recruit::max('id');

    $academic_id_min = App\Models\Categories\Academic::min('id');
    $academic_id_max = App\Models\Categories\Academic::max('id');

    return [
        'recruit_id' =>  $faker->numberBetween($recruit_id_min, $recruit_id_max),
        'academic_id' => $faker->numberBetween($academic_id_min, $academic_id_max),
    ];
});