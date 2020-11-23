<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BarangModel extends Model
{
    use SoftDeletes;

    public $table           = "barang";
    public $primaryKey      = "id";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['nama','harga','stok','jenis','status','kode_kategori','deleted_at','created_at','updated_at'];

    public function simpanData($nama,$harga,$stok,$jenis,$status,$kode_kategori){
        $barang = new BarangModel();
        $barang->nama             = $nama;
        $barang->harga            = $harga;
        $barang->stok             = $stok;
        $barang->jenis            = $jenis;
        $barang->status           = $status;
        $barang->kode_kategori    = $kode_kategori;
        $barang->deleted_at       = null;
        $barang->created_at       = null;
        $barang->updated_at       = null;
        $barang->save();
    }

    public function showDataForAdmin()
    {
        $query = BarangModel::select('barang.*','kategori.nama as nama_kat')
                            ->join('kategori','id_kat','barang.kode_kategori')
                            ->get();
        return $query;
    }
}
