<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller {

	public function user($username) {
        $user = User::where('username', '=', $username);

        if($user->count()) {
            $user = $user->first();
            return view('profile.user', compact('user'));
        }
        return abort(403, 'Unauthorized.');
	}

}
