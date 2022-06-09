<?php

namespace App\Http\Controllers;

use App\Models\Subscription;

class SubscriptionController extends Controller {

	public function postEmail() {
        $subscription = new Subscription;
        $rules = array(
            'email' => array('required', 'email', 'unique:subscriptions,email'), // Email is required and should satisfy E-mail format and it should be unique for table users.
        );
        $validation = Validator::make(Input::all(), $rules);

        if($validation->fails()) {
            return Redirect::back()->with('message', '<p>That email is already registered in our database or is not a valid email address. Please use another email to subscribe!</p>');
        } else {
            $subscription->email = Input::get('email');
            $subscription->save();
            return Redirect::back()->with('message','<p>You have succesfully subscribed to our newsletter!</p><h5>KEEP CALM AND WAIT FOR THE UPCOMING NEWS</h5><br>');
        }
	}

	public function checkEmail() {
        $db = new PDO('mysql:host=127.0.0.1;dbname=moefgaga', 'root', '');
		if(isset($_GET['type'], $_GET['value'])) {

			$type = strtolower(trim($_GET['type']));
			$value = strtolower(trim($_GET['value']));

			$output = ['exists' => false];

			if(in_array($type, ['email'])) {
                switch($type) {
                    case 'email':
                        $check = $db->prepare("
                            SELECT COUNT(*) AS count
                            FROM subscriptions
                            WHERE email = :value
                        ");
                    break;
                }
                $check->execute(['value' => $value]);
                $output['exists'] = $check->fetchObject()->count ? true : false;

                echo json_encode($output);
			}
		}
	}

}
