<?php

namespace App\Models\Videos;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{

    protected $fillable = ['video_id', 'user_id'];

    public function video()
    {
        return $this->belongsTo('App\Models\Videos\Good');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\Users\User');
    }
}
