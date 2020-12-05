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
        $query = DorderModel::select(["dorder.*","barang.nama_barang","barang.harga as harga_barang"])
                            ->leftJoin('barang','barang.id','dorder.kode_barang')
                            ->Where('qty','>',0)
                            ->get();

        return $query;
    }
}
