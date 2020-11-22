<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PromoModel extends Model
{
    public $table           = "promo";
    public $primaryKey      = "id";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['id','nama','tanggal_awal','tanggal_akhir','status'];

    public function insertData($txtnama,$tglawal,$tglakhir){
        $data = new PromoModel();
        $data->id            = null;
        $data->nama          = $txtnama;
        $data->tanggal_awal  = $tglawal;
        $data->tanggal_akhir = $tglakhir;
        $data->status        = 1;
        $data->save();
    }
}