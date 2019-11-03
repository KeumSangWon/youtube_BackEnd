<?php

namespace App\Models\Recruits;

use Illuminate\Database\Eloquent\Model;

class Recruit_language extends Model
{
    protected $table = 'language_recruit';
    protected $fillable = ['recruit_id', 'language_id'];
}
