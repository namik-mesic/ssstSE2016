<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class SearchController extends Controller
{
    public function index(){
        $users = User::all();
        return view('/users', compact('users'));
    }
}
