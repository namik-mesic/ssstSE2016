<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

/**
 * Class SearchController
 * @package App\Http\Controllers
 */
class SearchController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Method that returns a view with all of the users that match a query from the search input
     */
    public function index()
    {
        $users = User::all();
        return view('/users', compact('users'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * A method that return a profile page of the clicked user.
     */

    public function show($id){

        $user = User::find($id);

        return view('profile', compact('user'));
    }
}
