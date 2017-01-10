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

	public function clients()
    {
		return $this->belongsToMany('App\Client', 'mailing_list_clients', 'mailing_list_id', 'client_id');
    }

    public function mailingListClients()
    {
        return $this->hasMany('App\Client', 'user_id', 'id');
    }

    public static $rules = array(
        'name' => 'required|min:2',
        'user_id'  => 'required'
    );

};