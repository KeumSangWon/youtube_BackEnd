<?php

namespace App\Models\Videos;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'user_id', 'title', 'video_url', 'video_file', 'textrarea'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\Users\User');
    }

    public function good()
    {
        return $this->hasOne('App\Models\Videos\Good');
    }

    //다대다 관계에서 연결하기 위해 belongsToMany를 적고 인자로 중간테이블 명을 적어준다 그다음 인자로는 테이블 레코드명을 적어준다
    public function genre()
    {
        return $this->belongsToMany('App\Models\Categories\genre', 'genre_video', 'video_id', 'genre_id');
    }
}


