<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JenisMemberModel extends Model
{
    public $table           = "jenis_member";
    public $primaryKey      = "id";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $guarded      = [
        'id'
    ];

    public function insertData($nama,$minpoin,$potongan){
        $data = new JenisMemberModel();
        $data->id            = null;
        $data->nama          = $nama;
        $data->minimal_poin  = $minpoin;
        $data->potongan      = $potongan;
        $data->save();
    }
}
