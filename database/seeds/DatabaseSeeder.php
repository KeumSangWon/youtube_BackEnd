<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Users\User::class, 5)->create();
        factory(App\Models\Users\Type::class, 3)->create();
        factory(App\Models\Users\User_type::class, 3)->create();
        factory(App\Models\Videos\Video::class, 5)->create();
        factory(App\Models\Categories\Skill::class, 5)->create();
        factory(App\Models\Categories\Genre::class, 10)->create();
        factory(App\Models\Categories\Language::class, 7)->create();
        factory(App\Models\Categories\Academic::class, 3)->create();
        factory(App\Models\Categories\Etc::class, 5)->create();
        factory(App\Models\Categories\Salary::class, 6)->create();
        factory(App\Models\Categories\Career::class, 4)->create();
        factory(App\Models\Categories\Gender::class, 3)->create();
        factory(App\Models\Categories\Recruitment::class, 5)->create();
        factory(App\Models\Recruits\Recruit::class, 5)->create();
        factory(App\Models\Recruits\Recruit_genre::class, 5)->create();
        factory(App\Models\Recruits\Recruit_skill::class, 5)->create();
        factory(App\Models\Recruits\Recruit_academic::class, 5)->create();
        factory(App\Models\Recruits\Recruit_language::class, 5)->create();
        factory(App\Models\Recruits\Recruit_etc::class, 5)->create();
        factory(App\Models\Recruits\Apply::class, 5)->create();
        factory(App\Models\Videos\Video_genre::class, 5)->create();
        factory(App\Models\Videos\Good::class, 5)->create();
    }
}
