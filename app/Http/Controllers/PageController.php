<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Song;

class PageController extends Controller {

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

	public function index() {
		$songs = Song::orderBy('position', 'asc')->get();
		$song = Song::orderBy('position', 'asc')->first();
		return view('index', compact('song', 'songs'));
	}

	public function popularTracks($link){
        $link = str_replace('--', ', ', $link);
        $link = str_replace('-', ' ', $link);
        $artistmelodie = explode('_', $link);
        $song = Song::where('artist', 'LIKE', $artistmelodie[0])->where('name', 'LIKE', $artistmelodie[1])->first();

        $video_id = $song->id;
        $last_vid = Song::orderBy('id', 'DESC')->first();
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

        $prev_video = Song::where('id', '=', $prev_video_id)->first();
        $next_video = Song::where('id', '=', $next_video_id)->first();

        return view('topsongs', compact('link', 'song', 'next_video', 'prev_video'));
	}

	/**
	* Login user with facebook
	*
	* @return void
	*/
    public $restful = true;

	public function loginWithFacebook() {

	    // get data from input
        $code = Input::get( 'code' );

        // get fb service
        $fb = OAuth::consumer( 'Facebook','http://moefgaga.dev' );

        // check if code is valid

        // if code is provided get user data and sign in
        if ( !empty( $code ) ) {

            // This was a callback request from facebook, get the token
            $token = $fb->requestAccessToken( $code );

            // Send a request with it
            $result = json_decode( $fb->request( '/me' ), true );

            $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
            echo $message. "<br/>";

            //Var_dump
            //display whole array().
            dd($result);

        } else { // if not ask for permission first
            // get fb authorization
            $url = $fb->getAuthorizationUri();

            // return to facebook login url
                return Redirect::to( (string)$url );
        }

	}

}
