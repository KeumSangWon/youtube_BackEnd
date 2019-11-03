<?php

namespace App\Models\Recruits;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = ['recruit_id', 'user_id', 'check_compleat'];

    public function recruit()
    {
        return $this->belongsTo('App\Models\Recruits\Recruit');
    }

    public function user(){
        return $this->belongsTo('App\Models\Uesrs\User');
    }
}
