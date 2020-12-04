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
    protected $fillable     = ['tanggal_trans', 'subtotal', 'grandtotal', 'metode_pembayaran', 'kode_customer', 'kode_promo', 'order_id'];

    public function getAllDataBy($id)
    {
        $query = HorderModel::select(["horder.*", "dorder.*"])
            ->join("dorder", "kode_horder", "id_horder")
            ->where("horder.kode_customer", $id)
            ->get();
        return $query;
    }
    public function countAllOrder($id)
    {
        $query = HorderModel::where("kode_customer", $id)->get();
        return $query;
    }
    public function countAllCancelOrder($id)
    {
        $query = HorderModel::where("kode_customer", $id)->where('status_order', 4)->get();
        return $query;
    }
    public function history()
    {
        return $this->belongsToMany(BarangModel::class, 'dorder', 'kode_horder', 'kode_barang')
            ->withPivot("qty", "total")
            ->as("dorder");
    }

    public function getDataForKurir()
    {
        $query = HorderModel::select(["horder.*", "customer.nama as nama_cust", 'customer.alamat as alamat_cust'])
            ->join("customer", "id", "kode_customer")
            ->where("horder.status_order", 1)
            ->get();
        return $query;
    }

    public function getDataForKurirs($id)
    {
        $query = HorderModel::select(["horder.*", "customer.nama as nama_cust", 'customer.alamat as alamat_cust'])
            ->join("customer", "id", "kode_customer")
            ->where("horder.status_order", 2)
            ->where("horder.kode_pegawai", $id)
            ->get();
        return $query;
    }

    public function getDataForReport()
    {
        // $query = HorderModel::select(["horder.*", "customer.nama as nama_cust", 'customer.alamat as alamat_cust'])
        //     ->join("customer", "id", "kode_customer");
    }
}
