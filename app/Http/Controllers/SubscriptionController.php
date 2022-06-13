<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller {

	public function postEmail(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscriptions',
        ]);

        if($validator->fails()) {
            return response()->json(['message' => 'That email is already subscribed or is not a valid email address. Please use another email address to subscribe!'], 400);
        } else {
            $data = $validator->validated();
            $subscription = new Subscription;
            $subscription->email = $data['email'];
            $subscription->save();
            return response()->json(['message' => 'You have succesfully subscribed to our newsletter! KEEP CALM AND WAIT FOR THE UPCOMING NEWS!']);
        }
	}

	public function checkEmail(Request $request) {
        $data = $request->validate([
            'type' => 'required',
            'value' => 'required|email',
        ]);
        $sub = Subscription::where('email', $data['value'])->first();
        return response()->json(['exists' => !!$sub]);
	}
}
