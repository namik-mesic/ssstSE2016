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

    protected $fillable = array('fname', 'lname', 'mail', 'user_id');


};