<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class User_type extends Model
{
    protected $table = "type_user";
    protected $fillable = ['user_id', 'type_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\Users\User');
    }
}
