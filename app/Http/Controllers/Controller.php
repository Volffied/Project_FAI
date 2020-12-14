<?php

namespace App\Http\Controllers;

use App\Model\CustomerModel;
use App\Model\DchatModel;
use App\Model\HchatModel;
use App\Notifications\OrderNotification;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkChat(Request $req){
        $pesan  = $req->pesan;
        if($req->jenis == 0){
            $sender = Auth::user()->nama;
            $id_cust = Auth::user()->id;
        }else{
            $datanama = CustomerModel::where('nama',$req->namacust)->first();
            $id_cust= $datanama->id;
            $sender =  $req->namasender;
            $depanSender = explode(' ',trim($sender));
            $depanSender = $depanSender[0];
            $pesan = $pesan."<br>- <i>".$depanSender."<i>";
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

    public function getChat($jenis = null)
    {
        $chat = new HchatModel();
        if($jenis == null){
            $updateHchat = HchatModel::where('kode_customer',Auth::user()->id)->first();
            $updateHchat->occupied = 0;
            $updateHchat->save();
            $chats = $chat->getDataMessage(Auth::user()->id);
            return view('Common_Folder.chat',['chats'=>$chats]);
        }
        else{
            $dataAdminLogin = session()->get('adminLog');
            $dataCust = CustomerModel::where('nama',$jenis)->first();
            $updateHchat = HchatModel::where('kode_customer',$dataCust->id)->first();
            $updateHchat->occupied = 1;
            $updateHchat->save();
            DchatModel::where('kode_hchat',$updateHchat->id_hchat)->where('jenis',0)->update(['status'=>1]);
            $chats = $chat->getDataMessage($dataCust->id);
            return view('Admin_Folder.chatAdmin',['chats'=>$chats,'name'=>$dataAdminLogin->nama]);
        }
    }

    public function getNotifChat($jenis=null)
    {
        $updateHchat = HchatModel::where('kode_customer',Auth::guard('web')->user()->id)->first();
        if($jenis=="update"){
            DchatModel::where('kode_hchat',$updateHchat->id_hchat)->where('jenis',1)->update(['status'=>1]);
        }
        $getUnread = DchatModel::where('kode_hchat',$updateHchat->id_hchat)->where('jenis',1)->where('status',0)->count();
        return $getUnread;
    }
}
