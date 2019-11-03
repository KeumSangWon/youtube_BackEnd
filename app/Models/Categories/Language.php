<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['language_name'];

    public function recruit()
    {
        return $this->belongsToMany('App\Models\Recruits\Recruit', 'language_recruit', 'recruit_id', 'language_id');
    }
}
