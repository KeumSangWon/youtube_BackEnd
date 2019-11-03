<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Etc extends Model
{
    protected $fillable = ['etc_category'];

    public function recruit()
    {
        return $this->belongsToMany('App\Model\Recruit\Recruit', 'etc_recruit', 'recruit_id', 'etc_id');
    }
}
