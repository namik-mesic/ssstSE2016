<?php

/**
 * By Sabahudin Kodro
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
    protected $fillable = array('user_id', 'name', 'subject', 'content' ,);


    /**
     * Validation rules
     *
     * @var array $rules
     */
    public static $rules = array(
        'name' => 'required|min:2',
        'subject'  => 'required|min:2',
        'content'  => 'required|min:2',
    );

}
