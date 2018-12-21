<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Auth;
use Input;
Use Redirect;

class AdminController extends Controller
{
    public function _construct(){
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showRegForm()
    {
        return view('auth.reg');
    }
   
 public function login()
        {

        $rules = array(
            'email'    => 'required|email', 
            'password' => 'required|alphaNum|min:3' 
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) 
                ->withInput(Input::except('password')); 
        } else {

            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            );

        $verifyuser = DB::table('users')->where('email', $userdata['email'])->first();

            if (Auth::attempt($userdata)) {
                //dd($verifyuser);
                   
                            return redirect('backend/dashboard');
            } else {        

                return Redirect::to('login');

            }

        }
        }
}
