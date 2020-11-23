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
    protected $fillable     = ['nama','harga','stok','jenis','status','kode_kategori','kode_brand','deleted_at','created_at','updated_at'];

    public function simpanData($nama,$harga,$stok,$jenis,$status,$kode_kategori,$kode_brand){
        $barang = new BarangModel();
        $barang->nama             = $nama;
        $barang->harga            = $harga;
        $barang->stok             = $stok;
        $barang->jenis            = $jenis;
        $barang->status           = $status;
        $barang->kode_kategori    = $kode_kategori;
        $barang->kode_brand       = $kode_brand;
        $barang->deleted_at       = null;
        $barang->created_at       = null;
        $barang->updated_at       = null;
        $barang->save();
    }

    public function getAllDataBarang()
    {
        $query = BarangModel::select('barang.*','kategori.nama as nama_kat','b.nama as nama_brand')
                            ->join('kategori','id_kat','barang.kode_kategori')
                            ->leftJoin('brand as b','id_brand','barang.kode_brand')
                            ->get();
        return $query;
    }
    public function getAllDatabyCat(){
        $query = BarangModel::select(["barang.id","barang.nama as barang_nama","barang.harga as barang_harga","barang.stok as barang_stok","barang.gambar as barang_gambar","kategori.id_kat as kategori_id","kategori.nama as kategori_nama"])
                            ->join("kategori","kategori.id_kat","barang.kode_kategori")
                            ->orderBy("kategori.id_kat","ASC")->get();
        return $query;
    }
}
