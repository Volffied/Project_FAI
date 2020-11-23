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
        $brand = new BrandModel();
        $brand->nama             = $nama;
        $brand->gambar           = $gambar;
        $brand->desc             = $desc;
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
