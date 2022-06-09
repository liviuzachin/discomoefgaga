<?php

namespace App\Http\Controllers;

use App\Models\Photo;

class PhotosController extends Controller {

	public function photos() {
		$photos = Photo::orderBy('created_at', 'DESC')->get();
		return view('photos', compact('photos'));
	}

}
