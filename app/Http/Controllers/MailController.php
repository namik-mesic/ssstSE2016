<?php

/**
 * By Sabahudin Kodro
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Mail;
use App\User;

class MailController extends Controller
{

    /**
     * @var $user
     */
    protected $user;


    /**
     * MailController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Return index view for mails
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {

        $user = User::find(\Auth::id());
        $mails = $user -> mails()->get();

        return view('mail.index', array(

            'mails' => $mails

        ));

    }


    /**
     * Create new mail object
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        $mail = new Mail;
        $mail -> user_id = \Auth::id();

        return view('mail.create', array(

            'mail' => $mail

        ));

    }


    /**
     * Edit for mails
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){

        $mail = Mail::find($id);

        return view('mail.edit', array(

            'mail' => $mail

        ));


    }

    /**
     * Store function for create and edit mails
     *
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */

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

    /** Inda kreso */
    public function delete($id) {
        $mail = Mail::find($id);
        $mail -> delete();

        return redirect() -> route('mails');
    }
    /** Inda Kreso */
}
