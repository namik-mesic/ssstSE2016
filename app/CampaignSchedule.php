<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignSchedule extends Model
{
    protected $fillable = array('user_id', 'status', 'mailing_list_id', 'campaign_id');
	
	public function campaign()
	{
		return $this->belongsTo('App\Campaign');
	}
	
	public function mailingList()
	{
		return $this->belongsTo('App\MailingList');
	}
}
