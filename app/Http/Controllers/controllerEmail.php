<?php

namespace App\Http\Controllers;

use App\Mail\sendEmailVerification;
use App\Model\CustomerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class controllerEmail extends Controller
{
    public function updateEmail($id){
        $user = new CustomerModel();
        $param= $user->getDataEmailByid($id);
        $email = $param->email;
        $status = $param->status;
        session()->put("iduser",$id);
        Mail::to($email)->send(new sendEmailVerification());
        return $status;
    }
    public function updatedataEmail($id){
        $userUpdate = CustomerModel::find($id);
        $userUpdate->status = 1;
        $userUpdate->save();
        $userBaru= CustomerModel::find($id);
        session()->put('userLogin',$userBaru);
        session()->flash('berhasil','Test');
        return redirect("/profile");
    }
}
