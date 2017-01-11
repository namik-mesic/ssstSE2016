<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Mail;

class CampaignSchedule extends Model
{
    protected $fillable = array('user_id', 'status', 'mailing_list_id', 'mail_id');
	
	public function mail()
	{
		return $this->belongsTo('App\Mail');
	}

    public static $rules = array(
        'mailing_list_id' => 'required',
        'mail_id'  => 'required'
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
		
		$mail = $this->mail;

		Mail::send('campaignschedule.send_mail', ['mail' => $mail], function($message) use ($emails, $mail)
		{    
			$message->to($emails)->subject($mail->name);
		});
	}
}
