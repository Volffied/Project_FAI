<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HchatModel extends Model
{
    public $table           = "hchat";
    public $primaryKey      = "id_hchat";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['kode_customer'];

    public function getDataMessage($id){
        $query  = HchatModel::select(["hchat.*","dchat.*"])
                            ->join('dchat','kode_hchat','id_hchat')
                            ->where("kode_customer",$id)
                            ->get();
        return $query;
    }

    public function getDataMessageForAdmin(){
        $query  = HchatModel::select(["hchat.*","customer.nama as nama_cust"])
                            ->join('customer','id','kode_customer')
                            ->where("occupied",0)
                            ->get();
        return $query;
    }

    public function getCountMessage()
    {
        $response = [];
        $dataHchat = new HchatModel();
        $dataCheckChat = $dataHchat->getDataMessageForAdmin();
        foreach ($dataCheckChat as $key) {
            $response[$key->id_hchat]['namacust'] = $key->nama_cust;
            $response[$key->id_hchat]['count'] = DchatModel::where('kode_hchat',$key->id_hchat)->where('status',0)->where('jenis',0)->count();
        }

        return $response;
    }
}
