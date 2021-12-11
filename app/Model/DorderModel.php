<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DorderModel extends Model
{
    public $table           = "dorder";
    public $primaryKey      = "id";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['qty','total','kode_horder','kode_barang','created_at'];

    public function getAllDataForReport()
    {
        $query = DorderModel::select(["dorder.*","barang.nama_barang", "brand.nama_brand as brand","barang.harga as harga_barang"])
                            ->leftJoin('barang','barang.id','dorder.kode_barang')
                            ->leftJoin('brand','brand.id_brand','barang.kode_brand')
                            ->Where('qty','>',0)
                            ->get();

        return $query;
    }

    public function getAllDataForReportWithBrand($brand)
    {
        $query = DorderModel::select(["dorder.*","barang.nama_barang", "brand.nama_brand as brand","barang.harga as harga_barang"])
                            ->leftJoin('barang','barang.id','dorder.kode_barang')
                            ->leftJoin('brand','brand.id_brand','barang.kode_brand')
                            ->Where('qty','>',0)
                            ->where('brand.id_brand',$brand)
                            ->get();

        return $query;
    }
}
