<?php

namespace App\Http\Controllers;

class UploadsController extends Controller {

	public function uploadPhotos() {
		return view('upload.photos');
	}

    public function postUploadPhotos(){
        //$file = Input::file('file'); // your file upload input field in the form should be named 'file'
		//$destinationPath = 'images/gallery';
		//$filename = str_random(8).'.jpg';
		//$extension =$file->getClientOriginalExtension(); //if you need extension of the file

        $uploaded = [];
		$allowed = ['jpg'];
		$succeeded = [];
		$failed = [];

		if (!empty($_FILES['file'])) {
			foreach($_FILES['file']['name'] as $key => $name) {
				if($_FILES['file']['error'][$key] === 0) {

					$temp = $_FILES['file']['tmp_name'][$key];

					$ext = explode('.', $name);
					$ext = strtolower(end($ext));

					$file = str_random(8) . '.' . $ext;
                    $filename = explode('.', $file);
                    $filename = $filename[0];

					if(in_array($ext, $allowed) === true && move_uploaded_file($temp, "images/gallery/{$file}") === true) {
                        $succeeded[] = array(
                            'name' => $name,
                            'file' => $file
                        );
                        DB::table('photos')->insert(
                            array('name' => $filename, 'album' => time())
                        );
                    } else {
                        $failed[] = array('name' => $name);
                    }
				}
			}
		}

        // if(!empty($_POST['ajax'])) {

        // }

		echo json_encode(array(
			'succeeded' => $succeeded,
			'failed' => $failed
		));

		// $uploadSuccess = Input::file('file')->move($destinationPath, $filename);

		// if( $uploadSuccess ) {
		//    return Response::json('success', 200); // or do a redirect with some message that file was uploaded
		// } else {
		//    return Response::json('error', 400);
		// }
	}
}
