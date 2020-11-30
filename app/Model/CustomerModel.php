<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerModel extends Authenticatable
{
    use SoftDeletes;
    public $table           = "customer";
    public $primaryKey      = "id";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['id','nama','email','password','poin','notlp','alamat','status','kode_member'];

    public function insertData($email,$pass,$nama,$alamat,$notlp){
        $data   = new CustomerModel();
        $data->id               = null;
        $data->nama             = $nama;
        $data->email            = $email;
        $data->password         = $pass;
        $data->alamat           = $alamat;
        $data->notlp            = $notlp;
        $data->status           = 1;
        $data->poin             = 0;
        $data->kode_member      = 0;
        $data->save();
    }
    public function checkLogin($email,$pass){
        // $query = CustomerModel::where("email",$email)->where("password",$pass)->get();
        // return $query;
        $dataUser = [
            'email' => $email,
            'password' => $pass,
        ];

        if (Auth::guard('web')->attempt($dataUser)){
            $user = new CustomerModel;
            $user = $user->getUser($dataUser['email']);
            session()->put('userLogin', $user);
            session()->put('authUser', Auth::user());
            Auth::login(Auth::user());
        }
    }

    public function getUser($email)
    {
        $query = CustomerModel::select('customer.*','jenis_member.nama as nama_member','potongan')
                                ->join('jenis_member','id_member','kode_member')
                                ->where('email',$email)
                                ->first();
        return $query;
    }
}
