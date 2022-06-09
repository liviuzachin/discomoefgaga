<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideosController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index(){
        $videos = Video::orderBy('id', 'asc')->get();
		return view('videos.index')->with('videos', $videos);
	}

	public function show($videolink){
		$videolink = str_replace('-', ' ', $videolink);

		$video = Video::where('name', 'LIKE', $videolink)->first();
 		//return 'clipuri show: ' . $artistlink . '  ' . $cliplink . $video;

        $video_id = $video->id;
        $last_vid = Video::orderBy('id', 'DESC')->first();
        $last_id = $last_vid->id;

        if($video_id > 1) {
            $prev_video_id = $video_id - 1;
        } else {
            $prev_video_id = $last_id;
        }

        if($video_id < $last_id) {
            $next_video_id = $video_id + 1;
        } else {
            $next_video_id = 1;
        }

        $prev_video = Video::where('id', '=', $prev_video_id)->first();
        $next_video = Video::where('id', '=', $next_video_id)->first();

        return view('videos.show', compact('video', 'prev_video', 'next_video'));
	}
}
