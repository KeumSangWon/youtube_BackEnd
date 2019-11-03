<?php

namespace App\Models\Recruits;

use Illuminate\Database\Eloquent\Model;

class Recruit_genre extends Model
{

    protected $table = 'genre_recruit';
    protected $fillable = ['recruit_id', 'genre_id'];
    
    
}
