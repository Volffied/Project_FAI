<?php

namespace App\Http\Controllers;

use App\Model\DchatModel;
use App\Model\HchatModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function HalChat(){
        $user = session()->get('userLogin');
        $data = new HchatModel();
        $param['datachat'] = $data->getDataMessage($user->id);
        return view("Common_Folder.chatmockup");
    }
    public function checkChat(Request $req){
        $pesan  = $req->pesan;
        $id_cust= $req->id_cust;
        $sender =  $req->namasender;
        $kode_hchat = HchatModel::where("kode_customer",$id_cust)->first();
        $param = DchatModel::insert([
            "kode_hchat"    => $kode_hchat->id_hchat,
            "pesan"         => $pesan,
            "sender"        => $sender,
            "jenis"         => 0,
            "status"        => 0
        ]);
        return json_encode($param);
    }
}
