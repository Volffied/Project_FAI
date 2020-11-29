<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DorderModel extends Model
{
    public $table           = "dorder";
    public $primaryKey      = "id";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['qty','total','kode_horder','kode_barang'];

}
