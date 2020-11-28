<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class BrandModel extends Model
{
    use SoftDeletes;

    public $table           = "brand";
    public $primaryKey      = "id_brand";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['nama_brand','gambar','desc'];

    public function simpanData($txtnama,$txtgambar,$txtdesc){
        $brand = new BrandModel();
        $brand->nama_brand       = $txtnama;
        $brand->gambar           = $txtgambar;
        $brand->desc             = $txtdesc;
        $brand->status             = 1;
        $brand->deleted_at       = null;
        $brand->created_at       = null;
        $brand->updated_at       = null;
        $brand->save();
    }
    public function getAllDataBrand(){
        $query = BrandModel::all();
        return $query;
    }

    public function getAllDataBrandWithCount(){
        $query = BarangModel::select(DB::raw('count(id) as jumlah_barang'),'brand.nama_brand as nama','brand.gambar as gambar','brand.id_brand as id')->distinct()
                                    ->join('brand','brand.id_brand','barang.kode_brand')
                                    ->groupBy('kode_brand','brand.nama_brand','brand.gambar','brand.id_brand')->orderBy('kode_brand','ASC')->get();
        return $query;
    }
}
