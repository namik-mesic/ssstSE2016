<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Mail;

class CampaignSchedule extends Model
{
    protected $fillable = array('user_id', 'status', 'mailing_list_id', 'campaign_id');
	
	public function campaign()
	{
		return $this->belongsTo('App\Campaign');
	}

    public static $rules = array(
        'mailing_list_id' => 'required',
        'campaign_id'  => 'required'
    );
	
	public function mailingList()
	{
		return $this->belongsTo('App\MailingList');
	}
	
	public function send()
	{
		$emails = [];
		
		foreach($this->mailingList->clients as $client){
			$emails[] = $client->mail;
		}
		
		$campaign = $this->campaign;

		Mail::send('campaignschedule.send_mail', ['campaign' => $campaign], function($message) use ($emails, $campaign)
		{    
			$message->to($emails)->subject($campaign->name);    
		});
	}
}
