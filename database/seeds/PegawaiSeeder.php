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
        PegawaiModel::Insert([
            'nama' => 'Master',
            'notlp' => '081231894694',
            'email' => 'masteradmin@gmail.com',
            'password' => 'masteradmin',
            'jenis' => 0,
            'status' => 1
        ]);
        factory(PegawaiModel::class,10)->make()->each(function($pegawai){
            $pegawai->save();
        });
    }
}
