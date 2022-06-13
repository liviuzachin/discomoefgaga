<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Mail;
use App\Mail\ContactMail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class ContactController extends Controller {

	public function contact() {
		return view('contact');
	}

	public function postContact(Request $request) {
		$data = $request->validate([
            'name' => 'required|max:30|min:3',
            'email' => 'required|max:30|email',
            'message' => 'required|min:5',
        ]);

        try {
            Mail::to('liviuzachin@yahoo.com', 'Liviu')->send(new ContactMail($data));
        } catch (TransportExceptionInterface $error) {
            // return back()->with('error', 'We could not send your message at the moment. Please try again later. ');
            return response()->json(['message' => 'Sorry! We could not send your message at the moment. Please try again later.'], 400);
        }
        // return back()->with('global', 'Your message have been sent!');
        return response()->json(['message' => 'Great! Your message have been sent!']);
	}

}
