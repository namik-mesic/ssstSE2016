<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Mail;
use App\User;

class MailController extends Controller
{

    protected $user;

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {

        $user = User::find(\Auth::id());
        $mails = $user -> mails()->get();

        return view('mail.index', array(

            'mails' => $mails

        ));

    }

    public function create()
    {

        $mail = new Mail;
        $mail -> user_id = \Auth::id();

        return view('mail.create', array(

            'mail' => $mail

        ));

    }

    public function edit($id){

        $mail = Mail::find($id);

        return view('mail.edit', array(

            'mail' => $mail

        ));


    }

    public function store(Request $request)
    {

        $request->all();
        $input = $request['mail'];



        $validator = \Validator::make($input, mail::$rules);

        if($validator->fails()){
            if($input['id']){
                return redirect()->route('mail.edit', [$input['id']])->withErrors($validator)->withInput();
            }

            return redirect()->route('mail.create')->withErrors($validator)->withInput();
        }


        if($input['id']){
            $mail = Mail::find($input['id']);
            $mail->update($input);

            return redirect()->route('mails');
        }

        $mail = new Mail;
        $mail->create($input);

        return redirect()->route('mails');

    }

    public function delete($id) {
        $mail = Mail::find($id);
        $mail -> delete();

        return redirect() -> route('mails');
    }

}
