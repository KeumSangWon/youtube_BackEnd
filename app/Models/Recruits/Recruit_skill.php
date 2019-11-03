<?php

namespace App\Models\Recruits;

use Illuminate\Database\Eloquent\Model;

class Recruit_skill extends Model
{
    protected $table='recruit_skill';
    protected $fillable = ['recruit_id', 'skill_id'];
}
