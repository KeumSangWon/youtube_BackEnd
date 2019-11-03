<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['skill_name'];

    public function recruit()
    {
        return $this->belongsToMany('App\Models\Recruits\Recruit', 'recruit_skill', 'recruit_id', 'skill_id');
    }
}
