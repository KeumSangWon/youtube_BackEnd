<?php

namespace App\Models\Videos;

use Illuminate\Database\Eloquent\Model;

class Video_genre extends Model

{
    protected $table = 'genre_video';
    protected $fillable = ['video_id', 'genre_id'];

}
