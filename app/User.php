<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username','dob','color', 'password', 'activated', 'email_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Function that sets user's activated field to 1 and email token field to NULL after the user confirms
     * an email address. -Nedzad
     */
    public function activated()

    {

        $this->activated = 1;

        $this->email_token = null;

        $this->save();

    }
}
