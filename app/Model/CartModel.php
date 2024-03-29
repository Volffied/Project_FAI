<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartModel extends Model
{
    //use SoftDeletes;
    public $table           = "cart";
    public $primaryKey      = "id_cart";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['kode_barang','kode_user','nama_kategori','qty'];

    public function insertData($kode_barang,$kode_user,$nama_kategori,$qty){
        $cart = new CartModel();
        $cart->kode_barang     = $kode_barang;
        $cart->kode_user       = $kode_user;
        $cart->nama_kategori   = $nama_kategori;
        $cart->qty             = $qty;
        $cart->save();
    }

    public function barang($kode){
        return $this->hasMany(BarangModel::class,'id','kode_barang')->where('kode_user',$kode);
    }

    public function getAllCart($user_id)
    {
        $query = CartModel::select('barang.*','qty','nama_kategori as nama_kat')
                            ->join('barang','id','kode_barang')
                            ->where('kode_user',$user_id)
                            ->get();
        return $query;
    }
    public function getData($id_barang,$user_id)
    {
        $query = CartModel::select('cart.*')
                            ->join('barang','id','kode_barang')
                            ->where('kode_user',$user_id)
                            ->where('kode_barang',$id_barang)
                            ->first();
        return $query;
    }

}
