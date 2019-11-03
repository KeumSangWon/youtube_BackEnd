<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{

    protected $fillable = ['gender_item'];

    public function recruit(){
        return $this->hasMany('App\Models\Recruits\Recruit');
    }
}
