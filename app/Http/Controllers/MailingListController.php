<?php

/*
 * By: Sabahudin Kodro
 */

namespace App\Http\Controllers;

use App\MailingList;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class MailingListController extends Controller
{

    protected $user ;


    /**
     * Constuctor for user authentication.
     */
     public function __construct()
        {
            $this->middleware('auth');
            $this->user =  Auth::user();

        }

    /**
    * Return view with mailing_list table info where user_id is equal to the logged in user.
    */
    public function index(){

        $mailinglists = \DB::table('mailing_lists')->where('user_id', \Auth::id())->get();
        return view('mailing', array(
            'mailinglists' => $mailinglists
        ));

    }

    /**
     * Fill in table mailing_list from form.
     *
     * Return the MailingListController@index with a success message.
    */
    public function store(Request $request)
    {

        $mailinglist = new MailingList;

        $mailinglist -> fname = $request -> fname; //@param fname
        $mailinglist -> lname = $request -> lname; //@param lname
        $mailinglist -> mail = $request -> mail; //@param mail
        $mailinglist -> user_id = \Auth::id(); //@param id of current authenticated user

        $mailinglist -> save(); //save the created record

        return redirect()->back()->with(\Session::flash('success', 'Succsessfully added user'));;
        //Redirect back to the mailinglists view
    }


    /**
     *
     *
     *
     * @param $id
     *
     * @return response
     */
    public function show($id){



    }

    /**
     * Show form for editing
     *
     * @param $id
     *
     * @return response
     */

    public function edit(){

        return view('mailinglistsedit');

    }

    /**
     * Update specified resource from DB
     *
     * @param $id
     *
     * @return response
     */

    public function update($id){



    }

    /**
     * Remove the specified resource from DB
     *
     * @param  int  $id
     * @return Response
     */

    public function destroy($id){



    }

}
