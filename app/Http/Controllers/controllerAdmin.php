<?php

namespace App\Http\Controllers;

use App\Model\BarangModel;
use App\Model\BrandModel;
use App\Model\DchatModel;
use App\Model\HchatModel;
use App\Model\HorderModel;
use App\Model\JenisMemberModel;
use App\Model\KategoriModel;
use App\Model\PegawaiModel;
use App\Model\PromoModel;
use App\Rules\cekEmail;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class controllerAdmin extends Controller
{
    public function HalPageLogin(){return view('Admin_Folder.LoginAdmin');}

    public function HalPageAdmin(){
        $dataKategori = KategoriModel::all();
        $dataJenisMember = JenisMemberModel::all();
        $dataPromo = PromoModel::all();
        $ambildataBar = new BarangModel();
        $dataBarang = $ambildataBar->getAllDataBarang();
        return view('Admin_Folder.Admin',['dataKat'=>$dataKategori,'dataBarang'=>$dataBarang,'dataMember'=>$dataJenisMember,'dataPromo'=>$dataPromo]);
    }

    public function HalPageMaster(){
        $dataPegawai = PegawaiModel::where('jenis','<>',0)->get();
        return view('Admin_Folder.Master',['daftarPegawai'=>$dataPegawai]);
    }

    public function HalPageCS(){
        $namaPeg = session()->get('adminLog');
        return view('Admin_Folder.CustomerService',['namaPeg'=>$namaPeg]);
    }

    public function HalPageKurir(){return view('Admin_Folder.Kurir');}

    public function HalPagemPegawai(){
        $dataPegawai = PegawaiModel::where('jenis','<>',0)->get();
        return view('Admin_Folder.pegawai',['daftarPegawai'=>$dataPegawai]);
    }

    public function HalPagemAntarHorder()
    {
        return view('Admin_Folder.pengantaranHorder');
    }

    public function HalPagemLaporanPenjualan()
    {
        return view('Admin_Folder.laporanjual');
    }

    public function HalPagemLaporanBarangLaris()
    {
        return view('Admin_Folder.laporanbaranglaris');
    }

    public function HalPagemPromo(){
        $dataPromo = PromoModel::withTrashed()->get();
        return view('Admin_Folder.promo',['dataPromo'=>$dataPromo]);
    }

    public function HalPagemBarang(){
        $dataKategori = KategoriModel::all();
        $ambildataBar = new BarangModel();
        $dataBarang = $ambildataBar->getAllDataBarang();
        $dataBrand = BrandModel::all();
        return view('Admin_Folder.barang',['dataKat'=>$dataKategori, 'dataBarang'=>$dataBarang,'dataBrand' => $dataBrand]);
    }

    public function HalPagemMember(){
        $dataJenisMember = JenisMemberModel::withTrashed()->get();
        return view('Admin_Folder.Member',['dataMember'=>$dataJenisMember]);
    }

    public function HalPagemkategori(){
        $dataKategori = KategoriModel::withTrashed()->get();
        return view('Admin_Folder.kategori',['dataKat'=>$dataKategori]);
    }

    public function HalPagemBrand(){
        $dataBrand = BrandModel::withTrashed()->get();
        return view('Admin_Folder.brand',['dataBrand'=>$dataBrand]);
    }

    public function LogoutAdmin(Request $request)
    {
        $request->session()->forget('adminLog');
        return redirect("loginAdmin");
    }

    public function checkAddPromo(Request $request){
        if($request->btnadd){
            $rules = [
                "txtnama" => "required",
                "diskon" => "required",
                "tglawal" => "required",
                "tglakhir"=> "required",
                "txtvoucher"=> "required|max:6"
            ];
            $message = [
                "txtnama.required" => "Nama harus di isi",
                "tglawal.required" => "Tanggal Awal harus di isi",
                "diskon.required" => "Diskon harus di isi",
                "tglakhir.required" => "Tanggal Akhir harus di isi",
                "txtvoucher.required" => "Kode Voucher harus di isi",
                "txtvoucher.max" => "Kode Voucher Max 6 karakter!",
            ];
            if ($request->validate($rules,$message)) {
                $namaPromo = $request->txtnama;
                $voucherPromo = strtoupper($request->txtvoucher);
                $dateAw = $request->tglawal;
                $dateAk = $request->tglakhir;
                $diskonPot = $request->diskon;
                $datetime1 = new DateTime($dateAw);
                $datetime2 = new DateTime($dateAk);
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');
                if($datetime1 < $datetime2){
                    $promo = new PromoModel();
                    $promo->insertData($namaPromo,$dateAw,$dateAk,$diskonPot,$voucherPromo);
                    return back();
                }else if($datetime1 > $datetime2){
                    return back();
                }
            }else{
                return back();
            }
        }else if($request->btnupdates){
            $rules = [
                "txtnama" => "required",
                "diskon" => "required",
                "tglawal" => "required",
                "tglakhir"=> "required"
            ];
            $message = [
                "txtnama.required" => "Nama harus di isi",
                "tglawal.required" => "Tanggal Awal harus di isi",
                "diskon.required" => "Diskon harus di isi",
                "tglakhir.required" => "Tanggal Akhir harus di isi",
            ];
            if ($request->validate($rules,$message)) {
                $idPromo = $request->id_promo;
                $namaPromo = $request->txtnama;
                $voucherPromo = strtoupper($request->txtvoucher);
                $dateAw = $request->tglawal;
                $dateAk = $request->tglakhir;
                $diskonPot = $request->diskon;
                $datetime1 = new DateTime($dateAw);
                $datetime2 = new DateTime($dateAk);
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');
                if($datetime1 < $datetime2){
                    $updatePromo = PromoModel::find($idPromo);
                    $updatePromo->nama             = $namaPromo;
                    $updatePromo->tanggal_awal     = $dateAw;
                    $updatePromo->tanggal_akhir    = $dateAk;
                    $updatePromo->potongan         = $diskonPot;
                    $updatePromo->voucher         = $voucherPromo;
                    $updatePromo->save();
                    return back();
                }else if($datetime1 > $datetime2){
                    return back();
                }
            }else{
                return back();
            }
        }
    }

    public function addJenisMember(Request $request)
    {
        if($request->btnadd){
            $rules = [
                'txtnama' => 'required|max:50',
                'txtpoin' => 'required|numeric',
                'txtpotongan' => 'required|numeric'
            ];
            $customError = [
                'txtnama.required' => 'Nama harus diisi!',
                'txtpoin.required' => 'Poin harus diisi!',
                'txtpotongan.required' => 'Potongan harus diisi!',
                'max' => 'Maksimal Karakter adalah 50 Karakter!',
                'numeric' => 'Inputan Harus berupa angka!'
            ];
            $this->validate($request,$rules,$customError);
            $namaJenis = $request->txtnama;
            $poinMinJenis = $request->txtpoin;
            $potonganJenis = $request->txtpotongan;
            $inputJenisMember = new JenisMemberModel();
            $inputJenisMember->insertData($namaJenis,$poinMinJenis,$potonganJenis);
            return back();
        }else if($request->btnupdate){
            $rules = [
                'txtnama' => 'required|max:50',
                'txtpoin' => 'required|numeric',
                'txtpotongan' => 'required|numeric'
            ];
            $customError = [
                'txtnama.required' => 'Nama harus diisi!',
                'txtpoin.required' => 'Poin harus diisi!',
                'txtpotongan.required' => 'Potongan harus diisi!',
                'max' => 'Maksimal Karakter adalah 50 Karakter!',
                'numeric' => 'Inputan Harus berupa angka!'
            ];
            $this->validate($request,$rules,$customError);
            $idjenmember = $request->id_jenis_member;
            $namaJenis = $request->txtnama;
            $poinMinJenis = $request->txtpoin;
            $potonganJenis = $request->txtpotongan;
            $updateMember = JenisMemberModel::find($idjenmember);
            $updateMember->nama             = $namaJenis;
            $updateMember->minimal_poin     = $poinMinJenis;
            $updateMember->potongan         = $potonganJenis;
            $updateMember->save();
            return back();
        }

    }

    public function addBarang(Request $request)
    {
        if($request->btnadd){
            $rules = [
                'txtnama' => 'required|max:50',
                'txtharga' => 'required|numeric',
                'txtstok' => 'required|numeric|min:0',
                'txtgambar' => 'required'
            ];
            $customError = [
                'txtnama.required' => 'Nama harus diisi!',
                'txtharga.required' => 'Harga harus diisi!',
                'txtstok.required' => 'Stok harus diisi!',
                'txtgambar.required' => 'Gambar harus diisi!',
                'max' => 'Maksimal Karakter adalah 50 Karakter!',
                'min' => 'Tidak boleh dibawah 0!',
                'numeric' => ':attribute harus berisikan angka!'
            ];
            $this->validate($request,$rules,$customError);
            $namabarang = $request->txtnama;
            $gambarbarang = $request->txtgambar;
            $hargabarang = $request->txtharga;
            $stokbarang = $request->txtstok;
            $statusBarang = 1;
            $kategoriBarang = $request->cbpilihkategori;
            $kode_brand = $request->cbpilihbrand;
            $inputBarang = new BarangModel();
            $inputBarang->simpanData($namabarang,$hargabarang,$stokbarang,$statusBarang,$kategoriBarang,$gambarbarang,$kode_brand);
            return back();
        }else if($request->btnupdate){
            $rules = [
                'txtnama' => 'required|max:50',
                'txtharga' => 'required|numeric',
                'txtstok' => 'required|numeric|min:0',
                'txtgambar' => 'required'
            ];
            $customError = [
                'txtnama.required' => 'Nama harus diisi!',
                'txtharga.required' => 'Harga harus diisi!',
                'txtstok.required' => 'Stok harus diisi!',
                'txtgambar.required' => 'Gambar harus diisi!',
                'max' => 'Maksimal Karakter adalah 50 Karakter!',
                'min' => 'Tidak boleh dibawah 0!',
                'numeric' => ':attribute harus berisikan angka!'
            ];
            $this->validate($request,$rules,$customError);
            $idbarang = $request->id_barang;
            $namabarang = $request->txtnama;
            $gambarbarang = $request->txtgambar;
            $hargabarang = $request->txtharga;
            $stokbarang = $request->txtstok;
            $kategoriBarang = $request->cbpilihkategori;
            $kode_brand = $request->cbpilihbrand;
            $updateBarang = BarangModel::find($idbarang);
            $updateBarang->nama_barang      = $namabarang;
            $updateBarang->harga            = $hargabarang;
            $updateBarang->stok             = $stokbarang;
            $updateBarang->gambar           = $gambarbarang;
            $updateBarang->kode_kategori    = $kategoriBarang;
            if($kode_brand != 0) $updateBarang->kode_brand       = $kode_brand;
            $updateBarang->save();
            return back();
        }
    }

    public function DeletePromo(Request $request)
    {
        if($request->btnDel == "Recover"){
            $idpromoDel = $request->idpromohid;
            $delPromo = PromoModel::withTrashed()->where('id_promo',$idpromoDel)->restore();
            return back();
        }else if($request->btnDel == "Delete"){
            $idpromoDel = $request->idpromohid;
            $delPromo = PromoModel::find($idpromoDel)->delete();
            return back();
        }
    }

    public function DeleteJenisMember(Request $request)
    {
        if($request->btnDel == "Recover"){
            $idmemberDel = $request->idmemberhid;
            $delMember = JenisMemberModel::withTrashed()->where('id_member',$idmemberDel)->restore();
            return back();
        }else if($request->btnDel == "Delete"){
            $idmemberDel = $request->idmemberhid;
            $delMember = JenisMemberModel::find($idmemberDel)->delete();
            return back();
        }
    }

    public function DeleteBarang(Request $request)
    {
        if($request->btnDel == "Recover"){
            $idbarangDel = $request->idbaranghid;
            $delBarang = BarangModel::withTrashed()->where('id',$idbarangDel)->restore();
            return back();
        }else if($request->btnDel == "Delete"){
            $idbarangDel = $request->idbaranghid;
            $delBarang = BarangModel::find($idbarangDel)->delete();
            return back();
        }
    }

    public function DeleteKategori(Request $request)
    {
        if($request->btnDel == "Recover"){
            $idkategoriDel = $request->idkategorihid;
            $delKategori = KategoriModel::withTrashed()->where('id_kat',$idkategoriDel)->restore();
            return back();
        }else if($request->btnDel == "Delete"){
            $idkategoriDel = $request->idkategorihid;
            $delKategori = KategoriModel::find($idkategoriDel)->delete();
            return back();
        }
    }

    public function DeleteBrand(Request $request)
    {
        if($request->btnDel == "Recover"){
            $idbrandDel = $request->idbrandhid;
            $delBrand = BrandModel::withTrashed()->where('id_brand',$idbrandDel)->restore();
            return back();
        }else if($request->btnDel == "Delete"){
            $idbrandDel = $request->idbrandhid;
            $delBrand = BrandModel::find($idbrandDel)->delete();
            return back();
        }
    }

    public function addKategori(Request $request)
    {
        if($request->btnadd){
            $rules = [
                'txtnama' => 'required|max:50'
            ];
            $customError = [
                'txtnama.required' => 'Nama harus diisi!',
                'max' => 'Maksimal Karakter adalah 50 Karakter!'
            ];
            $this->validate($request,$rules,$customError);
            $namaKat = $request->txtnama;
            $inputKategori = new KategoriModel();
            $inputKategori->insertData($namaKat);
            return back();
        }else if($request->btnupdate){
            $rules = [
                'txtnama' => 'required|max:50'
            ];
            $customError = [
                'txtnama.required' => 'Nama harus diisi!',
                'max' => 'Maksimal Karakter adalah 50 Karakter!'
            ];
            $this->validate($request,$rules,$customError);
            $namaKat = $request->txtnama;
            $idKategori = $request->id_kategori;
            $updateKategori = KategoriModel::find($idKategori);
            $updateKategori->nama_kategori = $namaKat;
            $updateKategori->save();
            return back();
        }
    }

    public function UpdateTabelCS()
    {
        $dataHChat = new HchatModel();
        $dataChat = $dataHChat->getCountMessage();
        return view('Admin_Folder.tabelChatAjax',['dataChat'=>$dataChat]);
    }

    public function UpdateTabelKurir()
    {
        $dataPegawaiMasuk = session()->get('adminLog');
        if($dataPegawaiMasuk->status == 1){
            $dataHorder = HorderModel::where('status_order',1)->get();
        }else{
            $dataHorder = HorderModel::where('kode_pegawai',$dataPegawaiMasuk->id)->where('status_order',1)->get();
        }
        return view('Admin_Folder.tabelKurirAjax',['daftarPenjualan'=>$dataHorder]);
    }

    public function UpdateStatusKirim(Request $request)
    {

    }

    public function addBrand(Request $request)
    {
        if($request->btnadd){
            $rules = [
                'txtnama' => 'required|max:50',
                'txtgambar' => 'required',
                'txtdesc' => 'required'
            ];
            $customError = [
                'txtnama.required' => 'Nama harus diisi!',
                'txtgambar.required' => 'Gambar harus diisi!',
                'txtdesc.required' => 'Deskripsi harus diisi!',
                'max' => 'Maksimal Karakter adalah 50 Karakter!'
            ];
            $this->validate($request,$rules,$customError);
            $inputBrand = new BrandModel();
            $inputBrand->simpanData($request->txtnama,$request->txtgambar,$request->txtdesc);
            return back();
        }else if($request->btnupdate){
            $rules = [
                'txtnama' => 'required|max:50',
                'txtgambar' => 'required',
                'txtdesc' => 'required'
            ];
            $customError = [
                'txtnama.required' => 'Nama harus diisi!',
                'txtgambar.required' => 'Gambar harus diisi!',
                'txtdesc.required' => 'Deskripsi harus diisi!',
                'max' => 'Maksimal Karakter adalah 50 Karakter!'
            ];
            $this->validate($request,$rules,$customError);
            $idbrand = $request->id_brand;
            $updateBrand = BrandModel::find($idbrand);
            $updateBrand->nama_brand        = $request->txtnama;
            $updateBrand->gambar            = $request->txtgambar;
            $updateBrand->desc              = $request->txtdesc;
            $updateBrand->save();
            return back();
        }

    }

    public function addPegawai(Request $request)
    {
        $rules = [
            'txtnama' => 'required|max:50',
            'txtemail' => ['required','email:rfc,dns',new cekEmail],
            'txtpass' => 'required|max:50',
            'txtpass_confirmation' => 'required|same:txtpass',
            'txtphone' => 'required|numeric'
        ];
        $customError = [
            'txtnama.required' => 'Nama harus diisi!',
            'txtemail.required' => 'Email harus diisi!',
            'txtpass.required' => 'Password harus diisi!',
            'txtpass_confirmation.required' => 'Confirm Password harus diisi!',
            'txtphone.required' => 'Phone harus diisi!',
            'max' => 'Maksimal Karakter adalah 50 Karakter!',
            'email' => 'Format :attribute salah!',
            'same' => 'Confirm Password tidak sama dengan password',
            'numeric' => ':attribute harus berisikan angka!'
        ];
        $this->validate($request,$rules,$customError);
        $namaPeg = $request->txtnama;
        $emailPeg = $request->txtemail;
        $passPeg = Hash::make($request->txtpass);
        $phonePeg = $request->txtphone;
        $jenisPeg = $request->cbpilijenispegawai;
        $inputPegawai = new PegawaiModel();
        $inputPegawai->insertData($namaPeg,$emailPeg,$passPeg,$phonePeg,$jenisPeg);
        return back();
    }

    public function LoginAdmin(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];
        $customError = [
            'required' => ':attribute harus diisi!',
        ];
        $this->validate($request,$rules,$customError);
        $emailLog = $request->email;
        $passwordLog = $request->password;
        $userAvail = PegawaiModel::where('email',$emailLog)->first();
        if(Hash::check($passwordLog, $userAvail->password)){
            if($userAvail->jenis === 0){
                $request->session()->put('adminLog', $userAvail);
                return redirect("Master");
            }else if($userAvail->jenis === 1){
                $request->session()->put('adminLog', $userAvail);
                return redirect("Admin");
            }else if($userAvail->jenis === 2){
                $request->session()->put('adminLog', $userAvail);
                return redirect("Kurir");
            }else if($userAvail->jenis === 3){
                $request->session()->put('adminLog', $userAvail);
                return redirect("CustomerService");
            }
        }
    }
    public function updateTransaksi(Request $request){
        $rules = [
            "imgupload" => "required|mimes:png,jpg,jpeg|max:2048"      // max 2mb
        ];
        $message = [
            "imgupload.mimes"       => "format image png | jpg | jpeg ",
            "imgupload.required"    => "harus di isi",
            "imgupload.max"         => "ukuran maximal 2mb"
        ];

        if ($request->validate($rules,$message)) {
            //  bisa di lihat di storage/app/images
            //  getClientOriginalExtension    -> untuk mendapatkan format photo yang diupload
            //  getClientOriginalName         -> untuk mendapatkan nama photo yang diupload
            //  untuk akses path             ->"images/mask_cyborg_robot_142919_1920x1080.jpg" dd($path);
            $namaImage =  $request->file("imgupload")->getClientOriginalName();
            $path = $request->file("imgupload")->storeAs("images",$namaImage,"local");
            return redirect("Kurir/changeAntarHorder");
        }
        else{
            return redirect("Kurir/changeAntarHorder");
        }
    }
}
