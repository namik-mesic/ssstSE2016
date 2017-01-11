<?php
/**
 * By: Sabahudin Kodro
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailingList extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
    protected $fillable = array('name', 'user_id');

    /**
     * Clients realtion to mailing list
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function clients()
    {
		return $this->belongsToMany('App\Client', 'mailing_list_clients', 'mailing_list_id', 'client_id');
    }

    /**
     * MailingListClients relation to mailing list
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mailingListClients()
    {
        return $this->hasMany('App\Client', 'user_id', 'id');
    }

    /**
     * Validation rules
     *
     * @var array $rules
     */
    public static $rules = array(
        'name' => 'required|min:2',
        'user_id'  => 'required'
    );

};