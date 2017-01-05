<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailingListClient extends Model
{
    public function mailingLists(){

        return $this->hasMany('App\MailingList');

    }
}
