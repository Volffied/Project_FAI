<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JenisMemberModel extends Model
{
    public $table           = "jenis_member";
    public $primaryKey      = "id_member";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $guarded      = [
        'id_member'
    ];

    public function insertData($nama,$minpoin,$potongan){
        $data = new JenisMemberModel();
        $data->nama          = $nama;
        $data->minimal_poin  = $minpoin;
        $data->potongan      = $potongan;
        $data->save();
    }

    public function getPotonganByID($id)
    {
        $query = JenisMemberModel::where('id_member',$id+1)->first();

        return $query;
    }

    public function getMemberFromSucceededPoint($poin)
    {
        $query = JenisMemberModel::where('minimal_poin','<=',$poin)->orderBy('minimal_poin','DESC')->first();

        return $query;
    }
}
