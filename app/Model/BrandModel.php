<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BrandModel extends Model
{
    use SoftDeletes;

    public $table           = "brand";
    public $primaryKey      = "id";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['nama','gambar','desc'];

    public function simpanData($nama,$gambar,$desc){
        $barang = new BarangModel();
        $barang->nama             = $nama;
        $barang->gambar           = $gambar;
        $barang->desc             = $desc;
        $barang->deleted_at       = null;
        $barang->created_at       = null;
        $barang->updated_at       = null;
        $barang->save();
    }
    public function getAllDataBrand(){
        $query = BrandModel::all();
        return $query;
    }
}
