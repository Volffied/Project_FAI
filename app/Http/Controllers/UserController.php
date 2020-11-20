<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    ///////////////PAGE CONTROLLER////////////////
    public function Login()
    {
        return view('Common_Folder.login');
    }

    public function Register()
    {
        return view('Common_Folder.register');
    }


    ///////////////PROCCESS CONTROLLER////////////////
    public function prosesLogin(Request $request)
    {
        $rules = [
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required']
        ];

        $customError = [
            'email.required' => 'Email is still empty',
            'password.required' => 'Password is still empty',
        ];

        $this->validate($request,$rules,$customError);
    }
}
