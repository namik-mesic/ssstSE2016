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
    public function index()
    {
        $users = User::all();
        return view('/users', compact('users'));
    }

    public function show($id){

        $user = User::find($id);

        return view('profile', compact('user'));
    }
}
