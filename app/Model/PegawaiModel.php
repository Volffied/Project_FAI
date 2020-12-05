<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class PegawaiModel extends Authenticatable
{
    use SoftDeletes;
    public $table        = "pegawai";
    public $primaryKey   = "id";
    public $incrementing    = true;
    public $timestamps      = true;

    protected $fillable = [
        'nama',
        'email',
        'password',
        'notlp',
        'jenis',
        'status',
        'deleted_at',
    ];

    public function insertData($txtnama, $txtemail, $txtpass, $txttelp, $jenis)
    {
        $data = new PegawaiModel();
        $data->id            = null;
        $data->nama          = $txtnama;
        $data->email         = $txtemail;
        $data->password      = $txtpass;
        $data->notlp         = $txttelp;
        $data->jenis         = $jenis;
        $data->status        = 1;
        $data->save();
    }

    public function getPegawaiNganggur()
    {
        $pegawai = PegawaiModel::select('id')->where('jenis', 2)->get();
        $nganggur = [];
        foreach ($pegawai as $value) {
            $query = HorderModel::where('kode_pegawai', $value->id)
                ->where('status_order', 0)
                ->orWhere('status_order', 1)->first();
            if ($query == null) array_push($nganggur, $value);
        }
        $idx = rand(0, count($nganggur) - 1);
        return $nganggur[$idx];
    }
    public function checkLogin($emailLog, $passwordLog)
    {
        $dataPegawai = [
            'email' => $emailLog,
            'password' => $passwordLog,
        ];
        if (Auth::guard('admin')->attempt($dataPegawai)) {
            session()->put('userLogin', Auth::user());
            session()->put('authUser', Auth::user());
            return true;
        } else {
            return false;
        }
    }
}
