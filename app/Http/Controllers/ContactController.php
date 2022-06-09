<?php

namespace App\Http\Controllers;

class ContactController extends Controller {

	public function contact() {
		return view('contact');
	}

	public function postContact() {
		$valid = Validator::make(
            Input::all(),
            [
                'senderName' => 'required|max:30|min:3',
                'senderEmail'    => 'required|max:30|email',
				'message' => 'required|min:5'
            ]
        );
        if($valid->fails()) {
            // Redirect to the contact page
            return Redirect::route('contact')
                    ->withErrors($valid)
                    ->withInput();
        } else {
			$fromname = Input::get('senderName');
			$fromemail    = Input::get('senderEmail');
            $mesaj = Input::get('message');

			Mail::send('emails.contact', array('name' => $fromname, 'email' => $fromemail, 'mesaj' => $mesaj), function($message) {
                $message->to('liviuzachin@yahoo.com', 'Liviu')->subject('Contact Form Message to Moef Gaga Disco');
            });
            return Redirect::route('contact')->with('global', 'Your message have been sent! ');
		}
	}

}
