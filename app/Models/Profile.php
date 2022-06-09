<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model  {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['provider', 'user_id', 'identifier', 'profileURL', 'photoURL', 'displayName', 'firstName', 'lastName', 'gender', 'age', 'language', 'email', 'phone', 'country', 'city', 'username', 'coverInfoURL'];

    /**
     * Get the user that owns the profile.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
