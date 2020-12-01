<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class HorderModel extends Model
{
    public $table           = "horder";
    public $primaryKey      = "id_horder";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['tanggal_trans','subtotal','grandtotal','metode_pembayaran','kode_customer','kode_promo'];

    public function getAllDataBy($id){
        $query = HorderModel::select(["horder.*","dorder.*"])
                            ->join("dorder","kode_horder","id_horder")
                            ->where("horder.kode_customer",$id)
                            ->get();
        return $query;
    }
    public function history(){
        return $this->belongsToMany(BarangModel::class,'dorder','kode_horder','kode_barang')
                    ->withPivot("qty","total")
                    ->as("dorder");
    }
}
