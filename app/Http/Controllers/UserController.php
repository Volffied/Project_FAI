<?php

namespace App\Http\Controllers;

use App\Model\BarangModel;
use App\Model\BrandModel;
use App\Model\CartModel;
use App\Model\CustomerModel;
use App\Model\KategoriModel;
use App\Model\PromoModel;
use App\Model\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /////////////// PAGE CONTROLLER ////////////////

    public function HalAwal()
    {
        $barang = new BarangModel();
        $brand = new BrandModel();
        $param['barang'] = $barang->getAllDataBarang();
        $param['brand'] = $brand->getAllDataBrandWithCount();


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

    public function Brand($nama)
    {
        $brand = new BrandModel();
        $barang = new BarangModel();
        $brand = $brand->where('nama',$nama)->first();
        $barang = $barang->getAllDatabyBrand($brand->id_brand);
        return view('Common_Folder.brands',['brand' => $brand,'barang'=>$barang]);
    }

    public function Cart()
    {
        $barang = new BarangModel();
        $barang = $barang->getAllDataByAmount(5);
        return view('Common_Folder.cart',['barang' => $barang]);
    }


    /////////////// PROCCESS CONTROLLER ////////////////

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

    //////////////// AJAX CONTROLLER /////////////////////

    public function addToCart($id){
        $id_user =session()->get("userLogin")->id;
        if($id != -1){
            $databarang = new BarangModel;
            $databarang = $databarang->getAllDataByColumn("id",$id);
            $datacart = new CartModel;
            $cartinsert = new CartModel;

            $datacart = $datacart->getData($databarang->id,$id_user);
            if($datacart == null){
                $cartinsert->insertData($databarang->id,$id_user,$databarang->nama_kat,1);
            }
            else{
                $datacart->qty+=1;
                $datacart->save();
            }
        }
        $cart = new CartModel;
        $cart = $cart->getAllCart($id_user);
        if($cart == null){
            $cart = 0;
        }
        return json_encode(count($cart));
    }

    public function checkPromo($checkBy,$value)
    {
        if($checkBy == "kode"){
            $dataPromo = new PromoModel;
            $dataPromo = $dataPromo->getDataByCode($value);
            $response = [];
            $response['message'] = "Promo code doesn't exist";
            $response['potongan'] = null;
            if($dataPromo != null){
                $response['potongan'] = $dataPromo->potongan;
            }
            return json_encode($response);
        }else{
            $dataPromo = new PromoModel;
            $dataPromo = $dataPromo->getDataByMember($value);
        }
    }
}
