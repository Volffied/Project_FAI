<?php

use Illuminate\Database\Seeder;
use App\Model\PegawaiModel;
use Carbon\Carbon;
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
            'password' => Hash::make('masteradmin'),
            'jenis' => 0,
            'status' => 1,
            'created_at' =>Carbon::now()
        ]);
        PegawaiModel::Insert([
            'nama' => 'Marvel',
            'notlp' => '081231894694',
            'email' => 'marvel@gmail.com',
            'password' => Hash::make('123'),
            'jenis' => 1,
            'status' => 1,
            'created_at' =>Carbon::now()
        ]);
        PegawaiModel::Insert([
            'nama' => 'Samuel Wijaya',
            'notlp' => '081231894694',
            'email' => 'sam@gmail.com',
            'password' => Hash::make('123'),
            'jenis' => 2,
            'status' => 1,
            'created_at' =>Carbon::now()
        ]);
        PegawaiModel::Insert([
            'nama' => 'Robert William',
            'notlp' => '081231894694',
            'email' => 'william@gmail.com',
            'password' => Hash::make('123'),
            'jenis' => 3,
            'status' => 1,
            'created_at' =>Carbon::now()
        ]);
        factory(PegawaiModel::class,10)->make()->each(function($pegawai){
            $pegawai->save();
        });
    }
}
