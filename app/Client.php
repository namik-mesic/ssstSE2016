<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $fillable = array('user_id', 'fname', 'lname', 'mail',);
	
	public static $rules = array(
        'fname' => 'required|min:2',
        'lname'  => 'required|min:2',
        'mail'  => 'required|email',
    );
	
	
}
