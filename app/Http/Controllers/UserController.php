<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
use Validator;

class UserController extends Controller
{
    public function profileView()
    {
      $user=Auth::user();
      return view('updateProfile',compact('user'));
    }
    public function profileUpdate(Request $request)
    {
      $validator = Validator::make($request->all(), [
                 'name' => 'unique:users|max:255',
                 'email' => 'unique:users|max:255|email',
                 'password' => 'min:6',
                 'REpassword' => 'same:password',
             ]);

             if ($validator->fails()) {
                 return redirect('update-profile')
                             ->withErrors($validator)
                             ->withInput();
           }else{
             $user=Auth::user();
             if($request->name!=null)$user->name=$request->name;
             if($request->email!=null)$user->email=$request->email;
             if($request->password!=null)$user->password=$request->password;
             $user->save();
             return redirect('home');
           }


    }
    public function addPictureView()
    {
      $user=Auth::user();
      return view('addPicture',compact('user'));
    }
    public function addPicture()
    {
      $user=Auth::user();
      return view('addPicture',compact('user'));
    }
}
