<?php

namespace App\Models\Recruits;

use Illuminate\Database\Eloquent\Model;

class Recruit_academic extends Model
{
    protected $table = "academic_recruit";

    protected $fillable = ['recruit_id', 'academic_id'];
}
