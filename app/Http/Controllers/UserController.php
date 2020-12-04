<?php

namespace App\Http\Controllers;

use App\Model\BarangModel;
use App\Model\BrandModel;
use App\Model\CartModel;
use App\Model\CustomerModel;
use App\Model\DchatModel;
use App\Model\HchatModel;
use App\Model\HorderModel;
use App\Model\JenisMemberModel;
use App\Model\KategoriModel;
use App\Model\PegawaiModel;
use App\Model\PromoModel;
use App\Model\UserModel;
use App\Notifications\OrderNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    /////////////// PAGE CONTROLLER ////////////////

    public function HalAwal()
    {
        $barang = new BarangModel();
        $brand = new BrandModel();
        $chat = new HchatModel();
        $param['barang'] = $barang->getAllDataBarangPaginate(16,'barang.deleted_at',null);
        $param['brand'] = $brand->getAllDataBrandWithCount();
        if(session()->has('userLogin')){
            $param['chat'] = $chat->getDataMessage(session()->get('userLogin')->id);
        }
        // dd($param['brand']);
        //dd(auth()->user()->unreadNotifications);

        foreach (auth()->user()->unreadNotifications as $key => $item) {
            //session()->put('notif',$item->data["chat_isi"]);
            //$item->markAsRead(); //biar notifnya jdi read
            //dd($item->data["chat_isi"]);
        }
        return view('Common_Folder.home',['data' => $param]);
    }

    public function Login()
    {
        session()->forget('userLogin');
        session()->forget('authUser');
        session()->forget('notif');
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
        $brand = $brand->where('nama_brand',$nama)->first();
        $barang = $barang->getAllDatabyBrand($brand->id_brand);
        return view('Common_Folder.brands',['brand' => $brand,'barang'=>$barang]);
    }

    public function Cart()
    {
        // $barang = new BarangModel();
        // $barang = $barang->getAllDataByAmount(5);
        $potonganMember = new JenisMemberModel;
        $potonganMember = $potonganMember->getPotonganByID(session()->get('userLogin')->kode_member);
        $param["potongan"] = $potonganMember->potongan;
        $allCart = new CartModel;
        $param["history"] = HorderModel::where("kode_customer",session()->get('userLogin')->id)->orderBy('status_order','asc')->orderBy('id_horder','desc')->get();
        // foreach ($datahistory as $key => $value) {
        //    foreach ($value->history as $key2 => $data) {
        //         //dd($data);// buat dpet barang
        //         //dd($data->dorder);// buat dpet dorder
        //    }
        // }
        $param["barang"] = $allCart->getAllCart(session()->get('userLogin')->id);
        return view('Common_Folder.cart')->with($param);
    }

    public function Product($nama)
    {
        $nama = str_replace('-',' ',$nama);
        $barang = new BarangModel();
        $barang = $barang->getAllDataByColumn('barang.nama_barang',$nama)->first();
        $listBarang = new BarangModel;
        $listBarang = $listBarang->getAllDatabyBrand($barang->nama_brand);
        $listKatBarang = new BarangModel;
        $listKatBarang = $listKatBarang->getAllDataByColumn('kategori.id_kat',$barang->kode_kategori)->get();
        return view('Common_Folder.product',['barang' => $barang,'listBarang' => $listBarang,'listKat' =>$listKatBarang]);
    }

    public function Search(Request $request)
    {
        $barang = new BarangModel;
        $barang['barang'] = $barang->getAllDataBarangPaginateArray(48,$request->all());
        $barang['kategori'] = KategoriModel::all();
        $barang['brand'] = BrandModel::all();
        return view('Common_Folder.search',['data'=>$barang]);
    }

    public function Profile()
    {
        $kode_member = session()->get('userLogin')->kode_member;
        $datalogin = session()->get('userLogin')->id;
        //$user = CustomerModel::find($datalogin);
        $user = new CustomerModel();
        $horder = new HorderModel();
        $allhorder = $horder->countAllOrder($datalogin);
        $allcancelhorder = $horder->countAllCancelOrder($datalogin);
        $counthorder = 0;
        $countfailed = 0;
        if(count($allhorder) >0){
            $counthorder = count($allhorder);
        }
        if(count($allcancelhorder) >0){
            $countfailed = count($allcancelhorder);
        }
        $param["counthorder"] = $counthorder;
        $param["countfailed"] = $countfailed;
        $param["user"] = $user->getProfile($datalogin);
        if($kode_member != 5) $param["nextMember"] = JenisMemberModel::find($kode_member+1);
        else $param["nextMember"] = JenisMemberModel::find(5);
        $param["myMember"] = JenisMemberModel::find($kode_member);
        return view('Common_Folder.profile')->with($param);
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
                $array=[];
                foreach (auth()->user()->unreadNotifications as $key => $item) {
                    array_push($array,$item);
                    //$item->markAsRead(); //biar notifnya jdi read
                    //dd($item->data["chat_isi"]);
                }
                session()->put('notif',$array);
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
            //========================================
            $paramdata = CustomerModel::where("email",$email)->first();
            HchatModel::insert([
                "kode_customer" =>  $paramdata->id,
                "created_at"    => Carbon::now()
            ]);
            //========================================
            $kode_hchat = HchatModel::where("kode_customer",$paramdata->id)->first();
            DchatModel::insert([
                "kode_hchat"    => $kode_hchat->id_hchat,
                "pesan"         => "Halo, ".ucwords(strtolower($nama))."!<br>Ada yang bisa kami bantu?",
                "sender"        => "Admin",
                "jenis"         => 1,
                "status"        => 0,
                "created_at"    => Carbon::now()
            ]);
            return redirect("/register");
        }
    }

    //////////////// AJAX CONTROLLER /////////////////////

    public function addToCart($id,$qty){
        $id_user =session()->get("userLogin")->id;
        $response = [];
        if($id != -1){
            $databarang = new BarangModel;
            $databarang = $databarang->getAllDataByColumn("id",$id)->first();
            $datacart = new CartModel;
            $cartinsert = new CartModel;

            $datacart = $datacart->getData($databarang->id,$id_user);
            if($datacart == null){
                $cartinsert->insertData($databarang->id,$id_user,$databarang->nama_kat,$qty);
                $response['msg'] = "Added To Your Cart";
            }
            else{
                $datacart->qty+=$qty;
                $datacart->save();
                $response['msg'] = "Quantity Updated";
            }
        }
        $cart = new CartModel;
        $cart = $cart->getAllCart($id_user);
        if($cart == null){
            $cart = [];
        }
        $response['data'] = count($cart);
        return json_encode($response);
    }

    public function checkPromo($checkBy,$value)
    {
        if($checkBy == "kode"){
            $dataPromo = new PromoModel;
            $dataPromo = $dataPromo->getDataByCode($value);
            $response = [];
            $response['message'] = "Invalid Code";
            $response['potongan'] = null;
            $response['status'] = false;
            if($dataPromo != null){
                $response['potongan'] = $dataPromo->potongan;
                $response['message'] = "Discount ".$dataPromo->potongan."%";
                $response['status'] = true;
                $response['kodepotongan'] = $dataPromo->id_promo;
            }
            return json_encode($response);
        }else if($checkBy == "member"){
            $dataPromo = new JenisMemberModel;
            $dataPromo = $dataPromo->getPotonganByID($value);
            // $dataPromo = $dataPromo->getMemberFromSucceededPoint($value);
            $response = [];
            $response['member'] = $dataPromo->nama;
            $response['potongan'] = $dataPromo->potongan;
            return json_encode($response);
        }
    }

    public function updateCart($id_user,$id_barang,$qty=null)
    {
        if($qty==null){
            CartModel::where('kode_user',$id_user)->where('kode_barang',$id_barang)->delete();
            return "Product removed";
        }else{
            $cart = new CartModel;
            $cart = $cart->getData($id_barang,$id_user);
            $cart->qty = $qty;
            $cart->save();
            return "Product Updated";
        }
    }
}
