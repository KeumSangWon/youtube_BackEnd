<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model\Recruit\Recruit;
use App\Model\Recruit\Recruit_etc;
use App\Model\Category\Etc;
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

$factory->define(App\Models\Recruits\Recruit_etc::class, function (Faker $faker) {

    $recruit_id_min = App\Models\Recruits\Recruit::min('id');
    $recruit_id_max = App\Models\Recruits\Recruit::max('id');

    $etc_id_min = App\Models\Categories\Etc::min('id');
    $etc_id_max = App\Models\Categories\Etc::max('id');

    return [
        'recruit_id' =>  $faker->numberBetween($recruit_id_min, $recruit_id_max),
        'etc_id' => $faker->numberBetween($etc_id_min, $etc_id_max),
    ];
});