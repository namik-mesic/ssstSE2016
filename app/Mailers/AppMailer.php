<?php

/**
 * Created by PhpStorm.
 * User: Nedzad Hafizovic
 * Date: 16-Nov-16
 * Time: 23:27
 */
namespace App\Mailers;

use App\User;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class AppMailer
{
    protected $mailer;

    protected $from = 'nedzad.hafizovic@stu.ssst.edu.ba';

    protected $to;

    protected $view;

    protected $data = [];

    public function __construct(Mailer $mailer)
    {
        $this->$mailer = $mailer;
    }

    /**
     * @param User $user
     */
    public function sendEmailConfirmationTo(User $user)
    {
        $this -> $to = $user->email;
        $this -> $view = 'email.confirm';
        $this -> $data = compact('user');

        $this -> deliver();
    }

    public function deliver()
    {
        $this -> $mailer -> send($this->view, $this->data, function($message){
            $message -> from($this -> from, 'Administrator')
                -> to($this -> to);
        });
    }

}