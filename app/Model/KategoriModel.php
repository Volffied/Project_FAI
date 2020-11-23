<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class KategoriModel extends Model
{
    public $table           = "kategori";
    public $primaryKey      = "id";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['nama'];

    public function insertData($nama){
        $data = new KategoriModel();
        $data->id_kat        = null;
        $data->nama          = $nama;
        $data->save();
    }
}
