<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PromoModel extends Model
{
    use SoftDeletes;
    public $table           = "promo";
    public $primaryKey      = "id_promo";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['nama','tanggal_awal','voucher','tanggal_akhir','potongan','status'];

    public function insertData($txtnama,$tglawal,$tglakhir,$diskon,$voucher){
        $data = new PromoModel;
        $data->nama             = $txtnama;
        $data->tanggal_awal     = $tglawal;
        $data->tanggal_akhir    = $tglakhir;
        $data->voucher          = $voucher;
        $data->potongan         = $diskon;
        $data->status           = 1;
        $data->save();
    }

    public function getDataByCode($voucher)
    {
        $query = PromoModel::where('voucher',$voucher)
                            ->first();
        return $query;
    }

    public function getDataByMember($jenisMember)
    {
        $query = PromoModel::where('nama',$jenisMember)
                            ->first();
        return $query;
    }


}
