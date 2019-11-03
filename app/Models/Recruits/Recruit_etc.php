<?php

namespace App\Models\Recruits;

use Illuminate\Database\Eloquent\Model;

class Recruit_etc extends Model
{
    protected $table = "etc_recruit";
    protected $fillable = ['recruit_id', 'etc_id'];
}
