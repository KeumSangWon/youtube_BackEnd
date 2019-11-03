<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $fillable = ['academic_category'];

    public function recruit()
    {
        return $this->belongsToMany('App\Models\Recruits\Recruit', 'academic_recruit', 'recruit_id', 'academic_id');
    }
}
