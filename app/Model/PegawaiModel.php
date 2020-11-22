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

}
