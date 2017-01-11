<?php

/**
 * By Sabahudin Kodro
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailingListClient extends Model
{
    /**
     * Mailinglists relation to Mailing list clients
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mailingLists(){

        return $this->hasMany('App\MailingList');

    }
}
