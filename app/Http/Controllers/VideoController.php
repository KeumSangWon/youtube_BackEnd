<?php

namespace App\Http\Controllers;

use App\Models\Videos\Video;
use App\Models\Videos\Video_genre;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Video::orderBy('id', 'desc')->with('genre', 'user')->get();
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
        $video = Video::create([
            "user_id" => $request->get('user_id'), 
            'title'  => $request->get('title'),
            'video_url' => $request->get('video_url'),
            'video_file' => $request->get('video_file'), 
            'textarea' => $request->get('textarea'), 
        ]);
       $video_id = Video::where('user_id', $request->get('user_id'))->max('id');
       foreach( $request->get('genre') as $item){
           $genre = Video_genre::create([
               'video_id' => $video_id,
               'genre_id' => $item
        ]);    
       }
      
        return 'ok';
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
        $video = Video::find($id)->with('user')->first();
        return response()->json($video);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function myVideos(Request $request){

        $id = $request->id; 
        $videos = Video::where('user_id', $id)->with('user')->get();
        return response()->json($videos);
    }
}
