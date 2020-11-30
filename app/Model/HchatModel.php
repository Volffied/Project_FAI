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
        $query  = HchatModel::select(["hchat.*","dchat.pesan as pesan","dchat.sender as sender","dchat.jenis as jenis","dchat.status as status"])
                            ->where("kode_customer",$id)
                            ->get();
        return $query;
    }
}
