<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

class WorkController extends Controller {

	public function work(){
		return view('workwithus');
	}

	public function apply(Request $request) {
        // get the informations
        // $input = Input::get('form_data');
        // parse_str($input, $info);

        $validInfo = Validator::make($request->all(), array(
            'senderName'  => 'required|min:3',
            'senderEmail' => 'required|email',
            'country'     => 'required',
            'age'         => 'required|numeric',
            'gender'      => 'required',
            'position'    => 'required',
            'message'     => 'required|min:5'
        ));

        if($validInfo->fails()) {
            return response()->json(['success' => false, 'message' => 'Invalid Form. Please make sure that all the requiered fields are completed and submit again.', 'validator' => $validInfo->messages()], 400);
        } else { // continue and check the files

            $validFiles = Validator::make($request->file(), [
                'pic' => 'image',
                'cv'  => 'mimes:txt,doc,docx,pdf'
            ]);

            if($validFiles->fails()) {
                return response()->json(['success' => false, 'message' => 'The files, picture or CV are invalid.', 'errors' => $validFiles->messages()], 400);
            } else {
                $pic = $request->file('pic');
                $cv = $request->file('cv');
                $destPath = public_path().'/uploads/work_applications/';

                if ($pic && $cv) {

                    $picsize = $pic->getSize();
                    $cvsize = $cv->getSize();

                    // ask to replace cv file if larger than 1mb
                    if($cvsize > 1000000) {
                        return response()->json(['success' => false, 'message' => 'The CV is too large in size. Please Consider attaching a different file.'], 400);
                    }

                    // ask to replace image if larger than 8mb
                    if($picsize > 8000000) {
                        return response()->json(['success' => false, 'message' => 'The Picture is too large in size. Please Consider attaching a smaller one or use a editor to resize it.'], 400);
                    }

                    $picname = substr( md5(rand()), 0, 5) . $pic->getClientOriginalName();
                    $cvname = substr( md5(rand()), 0, 5) . $cv->getClientOriginalName();

                    $pic = $pic->move($destPath, $picname);
                    $cv = $cv->move($destPath, $cvname);

                    //resize picture if larger than 2 mb
                    if($picsize > 2000000) {
                        $picname = "2000x_" . $picname;
                        Image::make($pic->getRealPath())->resize(2000, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save($destPath.$picname);
                    }

                    if ($pic && $cv) {

                        $emailsTo = ['liviuzachin@yahoo.com' => 'Liviu'];

                        Mail::send('emails.applywork', array('name' => $info['senderName'], 'email' => $info['senderEmail'], 'country' => $info['country'], 'age' => $info['age'], 'gender' => $info['gender'], 'position' => $info['position'], 'mesaj' => $info['message']), function($sendMail) use ($cv, $picname, $destPath, $emailsTo, $info) {
                            $sendMail->to($emailsTo)
                                    ->replyTo($info['senderEmail'], $info['senderName'])
                                    ->subject('Application for Work at Moef Gaga Disco')
                                    ->attach($destPath.$picname)
                                    ->attach($cv->getRealPath());
                        });

                        return response()->json(['success' => true, 'message' => 'Application sent']);
                    }

                } elseif ($pic) {
                    return response()->json(['success' => false, 'message' => 'The CV is missing.'], 400);
                } elseif ($cv) {
                    return response()->json(['success' => false, 'message' => 'The picture is missing.'], 400);
                } else {
                    return response()->json(['success' => false, 'message' => 'The files, picture and CV are missing'], 400);
                }
            }

        }

        return response()->json(['success' => false, 'message' => 'No data received'], 400);
	}
}
