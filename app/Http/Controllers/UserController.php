<?php

namespace App\Http\Controllers;

use App\Mail\sendForgetPassword;
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
use App\Rules\PasswordCheckerRule;
use App\Notifications\OrderNotification;
use App\Rules\EmailChecker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    /////////////// PAGE CONTROLLER ////////////////

    public function HalAwal()
    {
        if(Auth::check()){
            $array = [];
            foreach (auth()->user()->unreadNotifications as $key => $item) {
                array_push($array, $item);
            }
            session()->put('notif', $array);
            $member = JenisMemberModel::find(auth()->user()->kode_member+1);
            if($member != null && auth()->user()->poin >= $member->minimal_poin){
                $cust = CustomerModel::find(auth()->user()->id);
                $cust->kode_member = $cust->kode_member+1;
                $cust->save();
            }
        }
        $updatePromo = new PromoModel;
        $updatePromo->updatePromo();
        $barang = new BarangModel();
        $brand = new BrandModel();
        $chat = new HchatModel();
        $promo = PromoModel::all();
        $param['barang'] = $barang->getAllDataBarangPaginate(16, 'barang.deleted_at', null);
        $param['brand'] = $brand->getAllDataBrandWithCount();
        $param['promo'] = $promo;
        if (Auth::check()) {
            $param['chat'] = $chat->getDataMessage(Auth::user()->id);
        }
        return view('Common_Folder.home', ['data' => $param]);
    }

    public function Login()
    {
        Auth::logout();
        return view('Common_Folder.login');
    }

    public function Register()
    {
        return view('Common_Folder.register');
    }

    public function Brand($nama)
    {
        if(Auth::check()){
            $array = [];
            foreach (auth()->user()->unreadNotifications as $key => $item) {
                array_push($array, $item);
            }
            session()->put('notif', $array);
            $member = JenisMemberModel::find(auth()->user()->kode_member+1);
            if($member != null && auth()->user()->poin >= $member->minimal_poin){
                $cust = CustomerModel::find(auth()->user()->id);
                $cust->kode_member = $cust->kode_member+1;
                $cust->save();
            }
        }
        $brand = new BrandModel();
        $barang = new BarangModel();
        $brand = $brand->where('nama_brand', $nama)->first();
        $barang = $barang->getAllDatabyBrand($brand->id_brand);
        return view('Common_Folder.brands', ['brand' => $brand, 'barang' => $barang]);
    }

    public function Cart()
    {
        // $barang = new BarangModel();
        // $barang = $barang->getAllDataByAmount(5);
        $updatePromo = new PromoModel;
        $updatePromo->updatePromo();
        $potonganMember = new JenisMemberModel;
        $potonganMember = $potonganMember->getPotonganByID(Auth::user()->kode_member);
        $param["potongan"] = $potonganMember->potongan;
        $allCart = new CartModel;
        $param["history"] = HorderModel::where("kode_customer", Auth::user()->id)->orderBy('status_order', 'asc')->orderBy('id_horder', 'desc')->get();
        // foreach ($datahistory as $key => $value) {
        //    foreach ($value->history as $key2 => $data) {
        //         //dd($data);// buat dpet barang
        //         //dd($data->dorder);// buat dpet dorder
        //    }
        // }
        $member = JenisMemberModel::find(auth()->user()->kode_member+1);
        if($member != null && auth()->user()->poin >= $member->minimal_poin){
            $cust = CustomerModel::find(auth()->user()->id);
            $cust->kode_member = $cust->kode_member+1;
            $cust->save();
        }
        $param["barang"] = $allCart->getAllCart(Auth::user()->id);
        return view('Common_Folder.cart')->with($param);
    }

    public function Product($nama)
    {
        if(Auth::check()){
            $array = [];
            foreach (auth()->user()->unreadNotifications as $key => $item) {
                array_push($array, $item);
            }
            session()->put('notif', $array);
            $member = JenisMemberModel::find(auth()->user()->kode_member+1);
            if($member != null && auth()->user()->poin >= $member->minimal_poin){
                $cust = CustomerModel::find(auth()->user()->id);
                $cust->kode_member = $cust->kode_member+1;
                $cust->save();
            }
        }
        $nama = str_replace('-', ' ', $nama);
        $barang = new BarangModel();
        $barang = $barang->getAllDataByColumn('barang.nama_barang', $nama)->first();
        $listBarang = new BarangModel;
        $listBarang = $listBarang->getAllDatabyBrand($barang->nama_brand);
        $listKatBarang = new BarangModel;
        $listKatBarang = $listKatBarang->getAllDataByColumn('kategori.id_kat', $barang->kode_kategori)->get();
        return view('Common_Folder.product', ['barang' => $barang, 'listBarang' => $listBarang, 'listKat' => $listKatBarang]);
    }

    public function Search(Request $request)
    {
        if(Auth::check()){
            $array = [];
            foreach (auth()->user()->unreadNotifications as $key => $item) {
                array_push($array, $item);
            }
            session()->put('notif', $array);
            $member = JenisMemberModel::find(auth()->user()->kode_member+1);
            if($member != null && auth()->user()->poin >= $member->minimal_poin){
                $cust = CustomerModel::find(auth()->user()->id);
                $cust->kode_member = $cust->kode_member+1;
                $cust->save();
            }
        }
        $barang = new BarangModel;
        $barang['barang'] = $barang->getAllDataBarangPaginateArray(48, $request->all());
        $barang['kategori'] = KategoriModel::all();
        $barang['brand'] = BrandModel::all();
        return view('Common_Folder.search', ['data' => $barang]);
    }

    public function Profile()
    {
        if(Auth::check()){
            $array = [];
            foreach (auth()->user()->unreadNotifications as $key => $item) {
                array_push($array, $item);
            }
            session()->put('notif', $array);
            $member = JenisMemberModel::find(auth()->user()->kode_member+1);
            if($member != null && auth()->user()->poin >= $member->minimal_poin){
                $cust = CustomerModel::find(auth()->user()->id);
                $cust->kode_member = $cust->kode_member+1;
                $cust->save();
            }
        }
        $kode_member = Auth::user()->kode_member;
        $datalogin = Auth::user()->id;
        //$user = CustomerModel::find($datalogin);
        $user = new CustomerModel();
        $horder = new HorderModel();
        $allhorder = $horder->countAllOrder($datalogin);
        $allcancelhorder = $horder->countAllCancelOrder($datalogin);
        $allsuccesshorder = HorderModel::where('kode_customer', Auth::user()->id)->where('status_order', 3)->get();
        $countsuccess = count($allsuccesshorder);
        $counthorder = count($allhorder);
        $countfailed = count($allcancelhorder);
        $param["counthorder"] = $counthorder;
        $param["countfailed"] = $countfailed;
        $param["countsuccess"] = $countsuccess;
        $param["user"] = Auth::user();
        if ($kode_member != 5) $param["nextMember"] = JenisMemberModel::find($kode_member + 1);
        else $param["nextMember"] = JenisMemberModel::find(5);
        $param["myMember"] = JenisMemberModel::find($kode_member);
        return view('Common_Folder.profile')->with($param);
    }

    public function editProfile()
    {
        $customer = CustomerModel::find(Auth::user()->id);
        return view('Common_Folder.editProfile', ['customer' => $customer]);
    }

    /////////////// PROCCESS CONTROLLER ////////////////

    public function prosesLogin(Request $request)
    {
        $rules = [
            'email' => ['required', 'email:rfc,dns', new EmailChecker],
            'password' => ['required', new PasswordCheckerRule($request->email)]
        ];

        $customError = [
            'email.required' => 'Email is still empty',
            'password.required' => 'Password is still empty',
        ];
        $this->validate($request,$rules,$customError);
        $email = $request->email;
        $pass  = $request->password;
        $credentials = [
            'email' => $email,
            'password' => $pass,
        ];

        if (Auth::guard('web')->attempt($credentials)){
            $array = [];
            foreach (auth()->user()->unreadNotifications as $key => $item) {
                array_push($array, $item);
                //$item->markAsRead(); //biar notifnya jdi read
                //dd($item->data["chat_isi"]);
            }
            session()->put('notif', $array);
            return redirect('/');
        }
        else {
            return redirect("/login");
        }
    }

    public function authGoogle(Request $request){
        return Socialite::driver('google')->redirect();
    }
    public function authGoogleCallback(Request $request){
        $user = Socialite::driver('google')->user();
        $terdaftar = CustomerModel::where("google_id", $user->getId())->first();
        if(!$terdaftar){
            $pass = Hash::make($user->getId());
            $customer   = new CustomerModel();
            $customer->insertData($user->getEmail(), $pass, $user->getName(), "default", "default",$user->getId(),1);
        }
        $credentials = [
            'email' => $user->getEmail(),
            'password' => $user->getId(),
        ];

        if (Auth::guard('web')->attempt($credentials)){
            $array = [];
            foreach (auth()->user()->unreadNotifications as $key => $item) {
                array_push($array, $item);
                //$item->markAsRead(); //biar notifnya jdi read
                //dd($item->data["chat_isi"]);
            }
            session()->put('notif', $array);
            return redirect('/');
        }
        else {
            return redirect("/login");
        }
    }

    public function notifications(Request $request){

        //dd(auth()->user()->Notifications);
        $param['notif']=auth()->user()->Notifications;
        return view('Common_Folder.notifications')->with($param);
    }
    public function notif($id){
        // $item = auth()->user()->Notifications->where('id',$id);
        // $item->markAsRead();
        $horder_id = 0;
        $status = 0;
        foreach (auth()->user()->Notifications as $key => $item) {
            if($item->id == $id){
                $horder_id = $item->data["kode_horder"];
                $status = $item->data["status"];
                $item->markAsRead();
            }
        }
        $horder = new HorderModel();
        $datahorder = HorderModel::find($horder_id);
        $horder = $horder->dataNotif($horder_id);
        return view('Common_Folder.notifAjax',['databarang'=>$horder,'datahorder'=>$datahorder,'status'=>$status]);
    }

    public function prosesRegister(Request $req)
    {
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
            "notelp.required"      => "Phone Number is still empty",
        ];
        if ($req->validate($rules, $message)) {
            $email  = $req->email;
            $pass   = Hash::make($req->password);
            $nama   = $req->name;
            $alamat = $req->alamat;
            $notlp  = $req->notelp;
            $user   = new CustomerModel();
            $user->insertData($email, $pass, $nama, $alamat, $notlp);
            //========================================
            $paramdata = CustomerModel::where("email", $email)->first();
            HchatModel::insert([
                "kode_customer" =>  $paramdata->id,
                "created_at"    => Carbon::now()
            ]);
            //========================================
            $kode_hchat = HchatModel::where("kode_customer", $paramdata->id)->first();
            DchatModel::insert([
                "kode_hchat"    => $kode_hchat->id_hchat,
                "pesan"         => "Halo, " . ucwords(strtolower($nama)) . "!<br>Ada yang bisa kami bantu?",
                "sender"        => "Admin",
                "jenis"         => 1,
                "status"        => 0,
                "created_at"    => Carbon::now()
            ]);
            session()->flash('message','Registered Successfully');
            return redirect("/login");
        }
    }

    public function updateProfile(Request $request)
    {
        $rules = [
            "oldPass"   => ['nullable', new PasswordCheckerRule(), 'different:newPass'],
            "newPass"   => ['required_with:oldPass'],
            "nama"      => "required",
            "alamat"    => "required",
            "notlp"     => "required"
        ];

        $message = [
            "nama.required"          => "Name is still empty",
            "notlp.required"         => "Phone Number is still empty",
            "alamat.required"        => "Address is still empty",
            "newPass.required_with"  => "New Password is still empty",
            "oldPass.different"      => "New Password is still the same as old password"
        ];
        $request->validate($rules, $message);
        $customer = Auth::user();
        $customer->nama = $request->nama;
        $customer->alamat = $request->alamat;
        $customer->notlp = $request->notlp;
        if ($request->gambar != null) {
            Storage::disk('public')->delete('images/' . $customer->gambar);
            $customer->gambar = $request->gambar->hashName();
            $request->gambar->store('images', 'public');
        }
        if ($request->oldPass != "") $customer->password = Hash::make($request->newPass);
        $customer->save();
        session()->flash('message','Profile Updated Successfully');
        return back();
    }

    public function forgotPassword(Request $request)
    {
        $cust = CustomerModel::where('email', $request->email)->first();
        $cust->password = Hash::make($request->password);
        $cust->save();
        session()->flash('message', 'Password has been successfully changed');
        session()->forget("forgotPassword");
        return redirect('/login');
    }

    //////////////// AJAX CONTROLLER /////////////////////

    public function addToCart($id, $qty)
    {
        $id_user = Auth::user()->id;
        $response = [];
        if ($id != -1) {
            $databarang = new BarangModel;
            $databarang = $databarang->getAllDataByColumn("id", $id)->first();
            $datacart = new CartModel;
            $cartinsert = new CartModel;

            $datacart = $datacart->getData($databarang->id, $id_user);
            if ($datacart == null) {
                $cartinsert->insertData($databarang->id, $id_user, $databarang->nama_kat, $qty);
                $response['msg'] = "Added To Your Cart";
            } else {
                $datacart->qty += $qty;
                $datacart->save();
                $response['msg'] = "Quantity Updated";
            }
        }
        $cart = new CartModel;
        $cart = $cart->getAllCart($id_user);
        if ($cart == null) {
            $cart = [];
        }
        $response['data'] = count($cart);
        return json_encode($response);
    }

    public function checkPromo($checkBy, $value)
    {
        if ($checkBy == "kode") {
            $dataPromo = new PromoModel;
            $dataPromo = $dataPromo->getDataByCode($value);
            $response = [];
            $response['message'] = "Invalid Code";
            $response['potongan'] = null;
            $response['status'] = false;
            if ($dataPromo != null) {
                $response['potongan'] = $dataPromo->potongan;
                $response['message'] = "Discount " . $dataPromo->potongan . "%";
                $response['status'] = true;
                $response['kodepotongan'] = $dataPromo->id_promo;
            }
            return json_encode($response);
        } else if ($checkBy == "member") {
            $dataPromo = new JenisMemberModel;
            $dataPromo = $dataPromo->getPotonganByID($value);
            // $dataPromo = $dataPromo->getMemberFromSucceededPoint($value);
            $response = [];
            $response['member'] = $dataPromo->nama;
            $response['potongan'] = $dataPromo->potongan;
            return json_encode($response);
        }
    }

    public function updateCart($id_user, $id_barang, $qty = null)
    {
        if ($qty == null) {
            CartModel::where('kode_user', $id_user)->where('kode_barang', $id_barang)->delete();
            return "Product removed";
        } else {
            $cart = new CartModel;
            $cart = $cart->getData($id_barang, $id_user);
            $cart->qty = $qty;
            $cart->save();
            return "Product Updated";
        }
    }

    public function checkEmail(Request $request)
    {
        $cust = CustomerModel::where('email', $request->email)->first();
        if ($cust != null) {
            if ($cust->status == 1) {
                Mail::to($cust->email)->send(new sendForgetPassword($request->email));
                return "lolos";
            } else return "This account haven't verify its email";
        } else return "Email doesn't exists";
    }

    public function checkSessionForgot($email)
    {
        $cust = CustomerModel::where("email", $email)->first();
        if (session()->has('forgotPassword') && $cust->id == session()->get("forgotPassword")) return "buka";
        else return "tutup";
    }
}
