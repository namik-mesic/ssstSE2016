<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = array('user_id', 'name', 'subject', 'content' ,);

    public static $rules = array(
        'name' => 'required|min:2',
        'content'  => 'required|min:2',
        'subject'  => 'required|min:2',
    );

}
