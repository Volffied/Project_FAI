<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
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

    public function insertData($txtnama,$txtemail,$txtpass, $txttelp,$jenis){
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
}
