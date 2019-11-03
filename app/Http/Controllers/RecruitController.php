<?php

namespace App\Http\Controllers;

use App\Models\Recruits\Recruit;
use App\Models\Recruits\Recruit_academic;
use App\Models\Recruits\Recruit_etc;
use App\Models\Recruits\Recruit_genre;
use App\Models\Recruits\Recruit_skill;
use App\Models\Recruits\Recruit_language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RecruitController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Recruit::orderBy('id', 'desc')->with('user', 'skill', 'salary', 'career', 'recruitment', 'genre')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $validator = Validator::make($request->json()->all(), [
        //     'user_id' => 'required|string|max:255',
        //     'title' => 'required|string|max:255',
        //     'youtubeURL' => 'required|string|max:255',
        //     'salary' => 'required|string|max:255',
        //     'career' => 'required|string|max:255',
        //     'recruitment_type' => 'required|string|max:255',   
        //     'skill' => 'required|string|max:255',
        //     'genre' => 'required|string|max:255',
        //     'video_file' => 'required|string|max:255',
        //     'academic' => 'required|string|max:255',
        //     'language' => 'required|string|max:255',
        //     'etc' => 'required|string|max:255',
        //     'textra' => 'required|string|max:255',
        //     'user_type' => 'required|string|max:255'
        // ]);

        // if($validator->fails()){
        //     return response()->json($validator->errors()->toJson(), 400);
        // }

        $recruit = Recruit::create([
            "user_id" => $request->get('user_id'), 
            'title'  => $request->get('title'),
            "salary_id" => $request->get('salary'),
            "career_id" => $request->get('career'), 
            "recruitment_id" => $request->get('recruitment_type'), 
            "gender_id" => $request->get('gender'), 
            'video_file' => $request->get('file'), 
            'textra' => $request->get('textra')
        ]);

        $recruit_id = Recruit::where('user_id', $request->get('user_id'))->max('id');

        foreach( $request->get('academic') as $item){
            $acadmic = Recruit_academic::create([
                'recruit_id' => $recruit_id,
                'academic_id' => $item
            ]);    
        }

        foreach( $request->get('skill') as $item){
            $acadmic = Recruit_skill::create([
                'recruit_id' => $recruit_id,
                'skill_id' => $item
            ]);    
        }

        foreach( $request->get('genre') as $item){
            $acadmic = Recruit_genre::create([
                'recruit_id' => $recruit_id,
                'genre_id' => $item
            ]);    
        }

        foreach( $request->get('etc') as $item){
            $acadmic = Recruit_etc::create([
                'recruit_id' => $recruit_id,
                'etc_id' => $item
            ]);    
        }

        foreach( $request->get('language') as $item){
            $acadmic = Recruit_language::create([
                'recruit_id' => $recruit_id,
                'language_id' => $item
            ]);    
        }
        

        return 'ok';
        // return $request->all();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
         // return $request;
         $id = $request->id; 
         $recruit = Recruit::where('id', $id)->with('user', 'skill', 'salary', 'career', 'recruitment', 'genre', 'language', 'etc', 'gender', 'academic', 'gender')->first();
         return response()->json($recruit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $param = [
            'title' => $request->get('title'),
            'salary_id' => $request->get('salary'),
            'career_id' => $request->get('career'),
            'recruitment_id' => $request->get('recruitment_type'),
            'gender_id' => $request->get('gender'),
            'video_file' => $request->get('file'),
            'textra' => $request->get('textra')
           ];

        $acadmic = Recruit_academic::where('recruit_id', $id)->delete();
        $skill = Recruit_skill::where('recruit_id', $id)->delete();
        $genre = Recruit_genre::where('recruit_id', $id)->delete();
        $language = Recruit_language::where('recruit_id', $id)->delete();
        $etc = Recruit_etc::where('recruit_id', $id)->delete();

        $ret = Recruit::where('id', $id)->update($param);

        foreach( $request->get('academic') as $item){
            $acadmic = Recruit_academic::create([
                'recruit_id' => $id,
                'academic_id' => $item
            ]);    
        }

        foreach( $request->get('skill') as $item){
            $acadmic = Recruit_skill::create([
                'recruit_id' => $id,
                'skill_id' => $item
            ]);    
        }

        foreach( $request->get('genre') as $item){
            $acadmic = Recruit_genre::create([
                'recruit_id' => $id,
                'genre_id' => $item
            ]);    
        }

        foreach( $request->get('etc') as $item){
            $acadmic = Recruit_etc::create([
                'recruit_id' => $id,
                'etc_id' => $item
            ]);    
        }

        foreach( $request->get('language') as $item){
            $acadmic = Recruit_language::create([
                'recruit_id' => $id,
                'language_id' => $item
            ]);    
        }
      
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;     
        $recruit = Recruit::where('id', $id)->delete();
    }
}
