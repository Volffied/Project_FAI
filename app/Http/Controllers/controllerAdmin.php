<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerAdmin extends Controller
{
    public function HalPageAdmin(){return view('Admin_Folder.Admin');}
    public function HalPagemPegawai(){return view('Admin_Folder.pegawai');}
    public function HalPagemPromo(){return view('Admin_Folder.promo');}
    public function HalPagemBarang(){return view('Admin_Folder.barang');}
    public function HalPagemMember(){return view('Admin_Folder.Member');}
    public function HalPagemkategori(){return view('Admin_Folder.kategori');}
}
