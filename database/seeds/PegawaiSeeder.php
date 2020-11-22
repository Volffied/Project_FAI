<?php

use Illuminate\Database\Seeder;
use App\Model\PegawaiModel;
use Illuminate\Support\Facades\Hash;
class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PegawaiModel::class,10)->make()->each(function($pegawai){
            $pegawai->save();
        });
    }
}
