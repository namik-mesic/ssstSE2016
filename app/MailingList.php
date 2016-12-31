<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailingList extends Model
{

    protected $fillable = array('fname', 'lname', 'mail', 'user_id');


};