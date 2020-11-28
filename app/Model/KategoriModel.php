<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class KategoriModel extends Model
{
    use SoftDeletes;
    public $table           = "kategori";
    public $primaryKey      = "id_kat";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['nama_kategori'];

    public function insertData($nama){
        $data = new KategoriModel();
        $data->id_kat        = null;
        $data->nama_kategori = $nama;
        $data->save();
    }
}
