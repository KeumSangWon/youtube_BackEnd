<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model\Recruits\Recruit;
use App\Model\Recruits\Recruit_skill;
use App\Model\Categories\Skill;
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

$factory->define(App\Models\Recruits\Recruit_skill::class, function (Faker $faker) {

    $recruit_id_min = App\Models\Recruits\Recruit::min('id');
    $recruit_id_max = App\Models\Recruits\Recruit::max('id');

    $skill_id_min = App\Models\Categories\Skill::min('id');
    $skill_id_max = App\Models\Categories\Skill::max('id');

    return [
        'recruit_id' =>  $faker->numberBetween($recruit_id_min, $recruit_id_max),
        'skill_id' => $faker->numberBetween($skill_id_min, $skill_id_max),
    ];
});