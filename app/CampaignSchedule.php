<?php

/**
 * By Sabahudin Kodro
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

use Mail;

class CampaignSchedule extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
    protected $fillable = array('user_id', 'status', 'mailing_list_id', 'mail_id');

    /**
     * Mail relations to Campaign Schedule
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function mail()
	{
		return $this->belongsTo('App\Mail');
	}

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = array(
        'mailing_list_id' => 'required',
        'mail_id'  => 'required'
    );

    /**
     * Mailinglist relation to campaign schedule
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function mailingList()
	{
		return $this->belongsTo('App\MailingList');
	}

    /**
     * Send mails
     */
	public function send()
	{
		$emails = [];
		
		foreach($this->mailingList->clients as $client){
			$emails[] = $client->mail;
		}
		
		$mail = $this->mail;

		Mail::send('campaignschedule.send_mail', ['mail' => $mail], function($message) use ($emails, $mail)
		{    
			$message->to($emails)->subject($mail->subject);
		});
	}
}
