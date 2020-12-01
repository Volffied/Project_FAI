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

    public function checkChat(Request $req){
        $pesan  = $req->pesan;
        if($req->jenis == 0){
            $sender = session()->get('userLogin')->nama;
            $id_cust = session()->get('userLogin')->id;
        }else{
            $id_cust= $req->id_cust;
            $sender =  $req->namasender;
        }
        $kode_hchat = HchatModel::where("kode_customer",$id_cust)->first();
        $param = new DchatModel;
        $param->kode_hchat = $kode_hchat->id_hchat;
        $param->pesan = $pesan;
        $param->sender = $sender;
        $param->jenis = $req->jenis;
        $param->status = 0;
        $param->save();
        return json_encode($param);
    }

    public function getChat()
    {
        $chat = new HchatModel();
        $chats = $chat->getDataMessage(session()->get('userLogin')->id);
        return view('Common_Folder.chat',['chats'=>$chats]);
    }
}
