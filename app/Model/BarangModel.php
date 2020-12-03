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
    protected $fillable     = ['nama_barang','harga','stok','gambar','status','kode_kategori','kode_brand','deleted_at','created_at','updated_at'];

    public function simpanData($nama,$harga,$stok,$status,$kode_kategori,$gambar,$kode_brand){
        $barang = new BarangModel();
        $barang->nama_barang      = $nama;
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
        $query = BarangModel::withTrashed()
                            ->select('barang.*','nama_kategori as nama_kat', 'kategori.id_kat','nama_brand as nama_brand','b.id_brand','b.gambar as gambar_brand')
                            ->join('kategori','id_kat','barang.kode_kategori')
                            ->leftJoin('brand as b','id_brand','barang.kode_brand')
                            ->orderBy('barang.id','asc')
                            ->get();
        return $query;
    }

    public function getAllDataBarangPaginateArray($range,$array)
    {
        $result = BarangModel::withTrashed()
                            ->select('barang.*','nama_kategori as nama_kat', 'kategori.id_kat','nama_brand as nama_brand','b.id_brand','b.gambar as gambar_brand')
                            ->join('kategori','id_kat','barang.kode_kategori')
                            ->leftJoin('brand as b','id_brand','barang.kode_brand');
        $ctr=0;
        $barang=false;
        $value = "";
        foreach ($array as $key => $value) {
            $column_value = '%'.$value.'%';
            if($key != 'page' && $key != 'barang'){
                $result = $result->where('nama_'.$key,'like',$column_value);
                $ctr++;
            }if($key == 'barang'){
                $value = $column_value;
                $barang = true;
            }
        }
        if($barang){
            if($ctr==0){
                $result = $result->orWhere('nama_brand','like',$column_value);
                $result = $result->orWhere('nama_kategori','like',$column_value);
                $result = $result->orWhere('nama_barang','like',$column_value);
            }else{
                $result = $result->Where('nama_barang','like',$column_value);
            }
        }
        $result = $result->orderBy('id','ASC')->paginate($range);
        return $result;
    }

    public function getAllDataBarangPaginate($range,$column,$value)
    {
        $query = BarangModel::withTrashed()
                            ->select('barang.*','nama_kategori as nama_kat', 'kategori.id_kat','nama_brand as nama_brand','b.id_brand','b.gambar as gambar_brand')
                            ->join('kategori','id_kat','barang.kode_kategori')
                            ->leftJoin('brand as b','id_brand','barang.kode_brand')
                            ->orderBy('barang.id','asc')
                            ->where($column,$value)
                            ->paginate($range);
        return $query;
    }

    public function getAllDataByColumn($column,$value)
    {
        $query = BarangModel::select('barang.*','nama_kategori as nama_kat','b.nama_brand','b.gambar as gambar_brand')
                            ->join('kategori','id_kat','barang.kode_kategori')
                            ->leftJoin('brand as b','id_brand','barang.kode_brand','left outer')
                            ->where($column,$value);
        return $query;
    }

    public function getAllDataByAmount($amount)
    {
        $query = BarangModel::select('barang.*','nama_kategori as nama_kat','nama_brand as nama_brand')
                            ->join('kategori','id_kat','barang.kode_kategori')
                            ->leftJoin('brand as b','id_brand','barang.kode_brand')
                            ->get()
                            ->take($amount);
        return $query;
    }

    public function getAllDatabyBrand($brand)
    {
        $query = BarangModel::select('barang.*','nama_kategori as nama_kat','brand.gambar as gambar_brand')
                            ->join('kategori','id_kat','barang.kode_kategori')
                            ->join('brand','id_brand','kode_brand')
                            ->where('brand.id_brand',$brand)
                            ->orWhere('brand.nama_brand',$brand)
                            ->get();
        return $query;
    }

    public function getAllDatabyCat(){
        $query = BarangModel::select(["barang.id","barang.nama_barang as barang_nama","barang.harga as barang_harga","barang.stok as barang_stok","barang.gambar as barang_gambar","kategori.id_kat as kategori_id","nama_kategori as kategori_nama"])
                            ->join("kategori","kategori.id_kat","barang.kode_kategori")
                            ->orderBy("kategori.id_kat","ASC")->get();
        return $query;
    }
}
