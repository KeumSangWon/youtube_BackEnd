<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = ['salary_item'];

    public function recruit(){
        return $this->hasMany('App\Models\Recruits\Recruit');
    }
}
