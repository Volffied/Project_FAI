<?php

namespace App\Http\Controllers;

use App\Model\BarangModel;
use App\Model\BrandModel;
use App\Model\CustomerModel;
use App\Model\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    ///////////////PAGE CONTROLLER////////////////
    public function HalAwal()
    {
        $barang = new BarangModel();
        $brand = new BrandModel();
        $param['barang'] = $barang->getAllDataBarang();
        $param['brand'] = $brand->getAllDataBrand();
        return view('Common_Folder.home',['data' => $param]);
    }

    public function Login()
    {
        session()->forget('userLogin');
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
            $user->checkLogin($email,$pass);
            if(session()->has('userLogin')){
                //dd($request->session()->get('userLogin'));
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
            "password.required"     => "Password is still empty",
            "conf_pass.required"    => "Confirm password is still empty",
            "name.required"         => "Name is still empty",
            "alamat.required"      => "Address is still empty",
        ];
        if ($req->validate($rules,$message)) {
            $email  = $req->email;
            $pass   = Hash::make($req->password);
            $nama   = $req->name;
            $alamat = $req->alamat;
            $notlp  = $req->notelp;
            $user   = new CustomerModel();
            $user->insertData($email,$pass,$nama,$alamat,$notlp);
            return redirect("/register");
        }
    }

    public function getData()
    {
        # code...
    }
}
