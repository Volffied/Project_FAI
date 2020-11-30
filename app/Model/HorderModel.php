<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HorderModel extends Model
{
    public $table           = "horder";
    public $primaryKey      = "id_horder";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['tanggal_trans','subtotal','grandtotal','metode_pembayaran','kode_customer','kode_promo'];


}
