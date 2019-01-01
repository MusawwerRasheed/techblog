<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class AdminLoginController extends Controller
{

    // Middleware for Admin Login

    public function __construct()
    {

        $this->middleware('guest:admin');



    }


    // Function for showing login form

    public function ShowLoginForm(){

        return view('auth.admin-login');

    }


    // Function for logging in

    public function login(Request $request){

        // Validate the form data

        $this->validate($request,[

            'email' => 'required|email',
            'password'=>'required|min:6',
        ]);

        // Attempt to log the user in

        if( Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember))
        {
            // If successful, then redirect to their intended location

            return redirect()->intended(route('admin.dashboard'));
        }

        // If unsuccessful, then redirect to the form with the form data

        return redirect()->back()->withInput($request->only('email','remember'));


    }


}

