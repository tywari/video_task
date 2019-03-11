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


Route::get('/v1/user-videos/{user_name}', 'VideoController@getVideoSize');

Route::get('/v1/video-info/{video_id}', 'VideoController@getVideoMetaData');

Route::patch('/v1/update/{video_id}','VideoController@update');

