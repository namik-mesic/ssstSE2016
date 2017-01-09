<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function clients()
	{
		return $this->hasMany('App\Client', 'user_id', 'id');
	}

    public function mails()
    {
        return $this->hasMany('App\Mail', 'user_id', 'id');
    }

    public function mailinglists()
    {
        return $this->hasMany('App\MailingList', 'user_id', 'id');
    }

    public function campaigns()
    {
        return $this->hasMany('App\Campaign', 'user_id', 'id');
    }
	
	public function campaignSchedules()
	{
		return $this->hasMany('App\CampaignSchedule', 'user_id', 'id');
	}
}
