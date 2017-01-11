<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\User;
use Auth;
use Illuminate\Support\Facades\Session;
use Validator;
use File;


class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Function that shows profile page for the user
     */
    public function profileView()
    {
        $user = Auth::user();
        return view('updateProfile', compact('user'));
    }
    public function confirm2View()
    {
        //$user = Auth::user();
        //dd(Session::get('data'));
        return view('confirm2');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Function that checks if data entered by user while updating profile are correct. If data is not valid
     * the validation exception is thrwon, else user is sent to the view where the identity needs to
     * be confirmed. -Nejra, Nedzad
     */

    public function profileUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'max:200',
            'email' => 'unique:users|max:255|email',
            'password' => 'min:6',
            'REpassword' => 'same:password',
        ]);



        if ($validator->fails()) {

          return redirect('update-profile')
             ->withErrors($validator)
             ->withInput();
        } else {

            //Session::put('data', $request->all());
            return redirect('/confirm2') -> with($request->session()->put('data',$request->all()));
        }


    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Function that shows view for adding profile photo. -Nejra, Nedzad
     */
    public function addPictureView()
    {
        $user = Auth::user();
        return view('addPicture', compact('user'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * Function that deals with photo validation and uploading. After the input passes the validation
     * it is stored to specified path. That path is stored in database for each specific user. -Nejra, Nedzad
     */

    public function addPicture(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'picture' => 'mimes:jpeg,bmp,png,jpg|image|required',
        ]);

        if ($validator->fails()) {
            return redirect('update-profile')
                ->withErrors($validator)
                ->withInput();
        } else {
            $currentUser = Auth::user();
            $user = User::find($currentUser->id);
            $file = $request->file('picture');
            $folderName = $user->email;
            $pathWithSpaces = 'images\users\ ' . $folderName;
            $path = str_replace(' ', '', $pathWithSpaces);
            if (!File::exists($path)) {
                File::makeDirectory($path);
                $file->move($path, $file->getClientOriginalName());
                $path .= '\ ' . $file->getClientOriginalName();
                $path = str_replace(' ', '', $path);
                $user->imgPath = $path;
                $user->save();
                return redirect('/profile');
            } else {
                $file->move($path, $file->getClientOriginalName());
                $path .= '\ ' . $file->getClientOriginalName();
                $path = str_replace(' ', '', $path);
                $user->imgPath = $path;
                $user->save();
                return redirect('/profile');
            }

        }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     * function that checks if the user is admin. If so, it shows all the users and option to edit and delete
     * the accounts. -Edim, Nedzad
     */
    public function panel()
    {
        if(Auth::user()->isAdmin == 1){
            $users= User::all();
            return view('listout', compact('users'));
        }else return redirect('/home')->with('notAuthorizedMessage', 'You are not authorized to access admin panel!');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * Function that deletes user choosen by admin. -Nedzad
     */
    public function deleteUser($id){
        $user = User::find($id);
        $user -> delete();

        return redirect()->back()->with('message', 'User deleted!');

    }


}
