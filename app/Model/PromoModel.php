<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PromoModel extends Model
{
    use SoftDeletes;
    public $table           = "promo";
    public $primaryKey      = "id";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['nama','tanggal_awal','tanggal_akhir','diskon_potongan','status'];

    public function insertData($txtnama,$tglawal,$tglakhir,$diskon){
        $data = new PromoModel();
        $data->id               = null;
        $data->nama             = $txtnama;
        $data->tanggal_awal     = $tglawal;
        $data->tanggal_akhir    = $tglakhir;
        $data->diskon_potongan  = $diskon;
        $data->status           = 1;
        $data->save();
    }
}
