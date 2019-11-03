<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['type_name'];

    public function User_type()
    {
        return $this->belongsToMany('App\Models\Users\User_type', 'type_user', 'user_id', 'type');
    }
}
