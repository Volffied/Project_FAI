<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BrandModel extends Model
{
    use SoftDeletes;

    public $table           = "brand";
    public $primaryKey      = "id_brand";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['nama','gambar','desc'];

    public function simpanData($txtnama,$txtgambar,$txtdesc){
        $brand = new BrandModel();
        $brand->nama             = $txtnama;
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
}
