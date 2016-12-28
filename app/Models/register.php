<?php
/**
 * Created by PhpStorm.
 * User: Sako34
 * Date: 26.12.2016
 * Time: 11.31
 */

class Register extends Eloquent {
    protected $guarded = array();
    protected $table = 'users'; // table name
    public $timestamps = 'false' ; // to disable default timestamp fields

    // model function to store form data to database
    public static function saveFormData($data)
    {
        DB::table('users')->insert($data);
    }



    public function store()
    {
        Register::saveFormData(Input::except(array('_token')));
        $data =  Input::except(array('_token')) ;
        $rule  =  array(
            'name'                   => 'required|unique:users',
            'email'                  => 'required|email|unique:users',
            'password'               => 'required|min:6|same:cpassword',
            'password_confirmation'  => 'required|min:6'
        ) ;

        $validator = Validator::make($data,$rule);

        if ($validator->fails())
        {
            return Redirect::to('register')
                ->withErrors($validator->messages());
        }
        else
        {
            Register::saveFormData(Input::except(array('_token','password_confirmation')));

            return Redirect::to('register')
                ->withMessage('Data inserted');
        }
    }

}