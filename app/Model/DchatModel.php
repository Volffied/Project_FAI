<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DchatModel extends Model
{
    public $table           = "dchat";
    public $primaryKey      = "id_chat";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['kode_hchat','pesan','sender','jenis','status'];

}
