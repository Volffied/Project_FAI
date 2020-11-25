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
    protected $fillable     = ['nama','harga','stok','gambar','status','kode_kategori','kode_brand','deleted_at','created_at','updated_at'];

    public function simpanData($nama,$harga,$stok,$status,$kode_kategori,$gambar,$kode_brand){
        $barang = new BarangModel();
        $barang->nama             = $nama;
        $barang->harga            = $harga;
        $barang->stok             = $stok;
        $barang->gambar           = $gambar;
        $barang->status           = $status;
        $barang->kode_kategori    = $kode_kategori;
        if($kode_brand != 0) $barang->kode_brand       = $kode_brand;
        $barang->deleted_at       = null;
        $barang->created_at       = null;
        $barang->updated_at       = null;
        $barang->save();
    }

    public function getAllDataBarang()
    {
        $query = BarangModel::select('barang.*','kategori.nama as nama_kat', 'kategori.id_kat','b.nama as nama_brand','b.id_brand')
                            ->join('kategori','id_kat','barang.kode_kategori')
                            ->leftJoin('brand as b','id_brand','barang.kode_brand')
                            ->get();
        return $query;
    }

    public function getAllDataByColumn($column,$id)
    {
        $query = BarangModel::select('barang.*','kategori.nama as nama_kat','b.nama as nama_brand')
                            ->join('kategori','id_kat','barang.kode_kategori')
                            ->leftJoin('brand as b','id_brand','barang.kode_brand')
                            ->where($column,$id)
                            ->first();
        return $query;
    }

    public function getAllDataByAmount($amount)
    {
        $query = BarangModel::select('barang.*','kategori.nama as nama_kat','b.nama as nama_brand')
                            ->join('kategori','id_kat','barang.kode_kategori')
                            ->leftJoin('brand as b','id_brand','barang.kode_brand')
                            ->paginate($amount);
        return $query;
    }

    public function getAllDatabyBrand($brand)
    {
        $query = BarangModel::select('barang.*','kategori.nama as nama_kat')
                            ->join('kategori','id_kat','barang.kode_kategori')
                            ->where('kode_brand',$brand)
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
