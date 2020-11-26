<?php

use Illuminate\Database\Seeder;
use App\Model\CustomerModel;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerModel::insert([
            'nama' => 'Group Kita',
            'poin' => 0,
            'email' => 'fpw.proyek@gmail.com',
            'password' => Hash::make('fpw'),
            'notlp' => '081231894694',
            'alamat' => 'Jl Raya',
            'status' => 1,
            'kode_jenis_member' => 0
        ]);
        factory(CustomerModel::class,10)->make()->each(function($customer){
            $customer->save();
        });
    }
}
