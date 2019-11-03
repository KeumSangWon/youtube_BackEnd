<?php

namespace App\Http\Controllers;

use App\Models\Categories\Academic;
use App\Models\Categories\Career;
use App\Models\Categories\Etc;
use App\Models\Categories\Gender;
use App\Models\Categories\Genre;
use App\Models\Categories\Language;
use App\Models\Categories\Recruitment;
use App\Models\Categories\Salary;
use App\Models\Categories\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RecruitItemController extends Controller {

    public function getItems(){
        $items = [Academic::get(),Career::get(),Etc::get(),Gender::get(),Genre::get(),Language::get(),Recruitment::get(),Salary::get(),Skill::get()];
        return response()->json($items);
    }
}