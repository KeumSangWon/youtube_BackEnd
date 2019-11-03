<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = ['career_item'];

    public function recruit(){
        return $this->hasMany('App\Models\Recruits\Recruit');
    }
}
