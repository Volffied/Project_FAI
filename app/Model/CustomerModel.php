<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class CustomerModel extends Authenticatable
{
    use SoftDeletes;
    public $table           = "customer";
    public $primaryKey      = "id";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['id','nama','email','password','poin','notlp','alamat','status','kode_member'];

    public function barang(){
        return $this->belongsToMany(BarangModel::class,'cart','kode_user','kode_barang')
                    ->withPivot("qty","nama_kategori")
                    ->as("cart");
    }

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
            request()->session()->put('userLogin', Auth::user());
            Auth::login(Auth::user());
        }
    }
}
