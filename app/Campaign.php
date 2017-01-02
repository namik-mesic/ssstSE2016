<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = array('user_id', 'name', 'content',);

    public static $rules = array(
        'name' => 'required|min:2',
        'content'  => 'required|min:2',
    );

}
