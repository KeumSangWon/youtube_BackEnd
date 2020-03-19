<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

Route::post('recruit', 'RecruitController@store');
Route::post('recruit_update', 'RecruitController@update');
Route::post('apply', 'ApplyController@apply');
Route::post('create_video', 'VideoController@store');

// Route::group(['middleware' => ['jwt.verify']], function() {
//    
//     Route::get('closed', 'DataController@closed');
// });
Route::get('profile', 'UserController@getAuthenticatedUser');
Route::get('type', 'UserController@getUserType');


Route::get('video_show', "VideoController@show");
Route::get('video_index', "VideoController@index");
Route::get('my_videos', "VideoController@myVideos");

Route::get('items', "RecruitItemController@getItems");
Route::get('recruit_show', "RecruitController@show");
Route::get('recruit_index', "RecruitController@index");
Route::get('recruit_view', "RecruitController@show");
Route::get('recruit_destroy', "RecruitController@destroy");

// me -> youtuber/creater
Route::get('get_apply', "ApplyController@get_apply");
//  youtuber/creater -> me 
Route::get('get_pick', "ApplyController@get_pick");




