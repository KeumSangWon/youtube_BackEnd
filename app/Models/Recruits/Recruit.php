<?php

namespace App\Models\Recruits;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    protected $fillable = [
        'user_id', "salary_id", "career_id", "recruitment_id", "gender_id", 'title','video_file', 'textra'
    ];

    public function skills(){
        return $this->belongsToMany('App\Models\Categories\Skill', 'recruit_skill', 'recruit_id', 'skill_id')->withPivot(['skill_name']);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\Users\User');
    }

    public function apply()
    {
        return $this->hasMany('App\Models\Recruits\Apply');
    }

    public function skill()
    {
        return $this->belongsToMany('App\Models\Categories\Skill', 'recruit_skill', 'recruit_id', 'skill_id');
    }

    public function etc()
    {
        return $this->belongsToMany('App\Models\Categories\Etc', 'etc_recruit', 'recruit_id', 'etc_id');
    }

    public function genre()
    {
        return $this->belongsToMany('App\Models\Categories\Genre', 'genre_recruit', 'recruit_id', 'genre_id');
    }

    public function language()
    {
        return $this->belongsToMany('App\Models\Categories\Language', 'language_recruit', 'recruit_id', 'language_id');
    }

    public function academic()
    {
        return $this->belongsToMany('App\Models\Categories\Academic', 'academic_recruit', 'recruit_id', 'academic_id');
    }

    public function career(){
        return $this->belongsTo('App\Models\Categories\Career');
    }

    public function salary(){
        return $this->belongsTo('App\Models\Categories\Salary');
    }

    public function recruitment(){
        return $this->belongsTo('App\Models\Categories\Recruitment');
    }

    public function gender(){
        return $this->belongsTo('App\Models\Categories\Gender');
    }

    public function getSkill(Request $request){
        return App\Models\Recruits\Recruit::where('id', $request)->first()->with('skill')->where('id', $request)->first()->skill->all();
    }

    public function getAcademic(Request $request){
        return App\Models\Recruits\Recruit::where('id', $request)->first()->with('academic')->where('id', $request)->first()->skill->all();
    }

    public function getGenre(Request $request){
        return App\Models\Recruits\Recruit::where('id', $request)->first()->with('genre')->where('id', $request)->first()->skill->all();
    }

    public function getEtc(Request $request){
        return App\Models\Recruits\Recruit::where('id', $request)->first()->with('etc')->where('id', $request)->first()->skill->all();
    }

    public function getLanguage(Request $request){
        return App\Models\Recruits\Recruit::where('id', $request)->first()->with('language')->where('id', $request)->first()->skill->all();
    }
}
