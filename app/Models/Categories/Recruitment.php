<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    protected $fillable = ['recruitment_item'];

    public function recruit(){
        return $this->hasMany('App\Models\Recruits\Recruit');
    }
}
