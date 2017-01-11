<?php

/**
 * By Sabahudin Kodro
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
    protected $fillable = [
        'name','lastname', 'email', 'password',
    ];

    public static $rules = array(
        'name' => 'required|min:2',
        'lastname'  => 'required|min:2',
        'email'  => 'required|min:2',
        'password'  => 'required|min:2',
    );

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Clients relation to user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function clients()
	{
		return $this->hasMany('App\Client', 'user_id', 'id');
	}

    /**
     * Mails relation to user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mails()
    {
        return $this->hasMany('App\Mail', 'user_id', 'id');
    }

    /**
     * Mailinglists relation to user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mailinglists()
    {
        return $this->hasMany('App\MailingList', 'user_id', 'id');
    }

    /**
     * Campaign schedule relation to user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function campaignSchedules()
	{
		return $this->hasMany('App\CampaignSchedule', 'user_id', 'id');
	}
}
