<?php

namespace App\Http\Controllers;

use App\Model\PromoModel;
use Illuminate\Http\Request;

class controllerAdmin extends Controller
{
    public function HalPageAdmin(){return view('Admin_Folder.Admin');}
    public function HalPagemPegawai(){return view('Admin_Folder.pegawai');}
    public function HalPagemPromo(){return view('Admin_Folder.promo');}
    public function HalPagemBarang(){return view('Admin_Folder.barang');}
    public function HalPagemMember(){return view('Admin_Folder.Member');}
    public function HalPagemkategori(){return view('Admin_Folder.kategori');}

    public function checkAddPromo(Request $req){
        $rules = [
            "txtnama" => "required",
            "tglawal" => "required",
            "tglakhir"=> "required"
        ];
        $message = [
            "txtnama.required" => "data harus di isi",
            "tglawal.required" => "data harus di isi",
            "tglakhir.required" => "data harus di isi",
        ];
        if ($req->validate($rules,$message)) {
            $promo = new PromoModel();
            $promo->insertData($req->txtnama,$req->tglawal,$req->tglakhir);
            return redirect('Admin/promo');
        }
        else{
            return redirect('Admin/promo');
        }
    }
}
