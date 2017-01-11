<?php

/**
 * By Sabahudin Kodro
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
	protected $fillable = array('user_id', 'fname', 'lname', 'mail',);

    /**
     * Validation rules
     *
     * @var array $rules
     */
	public static $rules = array(
        'fname' => 'required|min:2',
        'lname'  => 'required|min:2',
        'mail'  => 'required|email',
    );
	
	
}
