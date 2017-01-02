<?php
/**
 * By: Sabahudin Kodro
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailingList extends Model
{
    /**
    * Make variables mass assignable
    */

    protected $fillable = array('name', 'user_id');

    public static $rules = array(
        'name' => 'required|min:2',
    );


};