<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['genre_name'];

    public function recruit()
    {
        return $this->belongsToMany('App\Models\Recruits\Recruit', 'genre_recruit', 'recruit_id', 'genre_id');
    }

    public function video()
    {
        return $this->belongsToMany('App\Models\Videos\Video', 'genre_video', 'video_id', 'genre_id');
    }
}
