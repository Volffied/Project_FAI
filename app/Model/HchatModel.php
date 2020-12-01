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
}
