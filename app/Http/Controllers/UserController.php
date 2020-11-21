<?php

namespace App\Http\Controllers;

use App\Model\CustomerModel;
use App\Model\UserModel;
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
        if ($request->validate($rules,$customError)) {
            $email = $request->email;
            $pass  = $request->password;
            $user  = new CustomerModel();
            $param = $user->checkLogin($email,$pass);
            if (count($param) > 0) {
                return redirect("/");
            }
            else{
                return redirect("/login");
            }
        }
    }
    public function prosesRegister(Request $req){
        $rules = [
            "email"     => "required|email:rfc,dns",
            "password"  => "required|min:8",
            "conf_pass" => "required|same:password",
            "name"      => "required",
            "alamat"   => "required",
            "notelp"    => "required|numeric"
        ];

        $message = [
            "email.required"        => "Email is still empty",
            "password.required"     => "password is still empty",
            "conf_pass.required"    => "confirm password is still empty",
            "name.required"         => "name is still empty",
            "alamat.required"      => "Address is still empty",
        ];
        if ($req->validate($rules,$message)) {
            $email  = $req->email;
            $pass   = $req->password;
            $nama   = $req->name;
            $alamat = $req->alamat;
            $notlp  = $req->notelp;
            $user   = new CustomerModel();
            $user->insertData($email,$pass,$nama,$alamat,$notlp);
            return redirect("/register");
        }
    }
}
