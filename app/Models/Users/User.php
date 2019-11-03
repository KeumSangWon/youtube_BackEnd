<?php
namespace App\Models\Users;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email','password','name','phone_num','location','picture','youtube_url'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    //데이터 숨길거는 fillable에있는것 여기에도 적어준다
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

    //join
    public function recruit()
    {
        return $this->hasMany('App\Models\Recruits\Recruit');
    }

    public function video()
    {
        return $this->hasMany('App\Models\Videos\Video');
    }

    public function type()
    {
        return $this->belongsToMany('App\Models\Users\Type', 'type_user', 'user_id', 'type');
    }

    public function apply(){
        return $this->hasMany('App\Models\Recruits\Apply');
    }

    public function good(){
        return $this->hasMany('App\Models\Videos\Good');
    }

    public function userType(){
        return $this->hasOne('App\Models\Users\User_type');
    }
}