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
            'nama' => 'Marvel',
            'poin' => 0,
            'email' => 'marvel@gmail.com',
            'password' => Hash::make('123'),
            'notlp' => '081231894694',
            'alamat' => 'Jl Raya',
            'status' => 1,
            'kode_member' => 1
        ]);
        CustomerModel::insert([
            'nama' => 'William',
            'poin' => 150,
            'email' => 'william@gmail.com',
            'password' => Hash::make('123'),
            'notlp' => '081231894694',
            'alamat' => 'Jl Raya',
            'status' => 1,
            'kode_member' => 2
        ]);
        CustomerModel::insert([
            'nama' => 'Samuel',
            'poin' => 400,
            'email' => 'sam@gmail.com',
            'password' => Hash::make('123'),
            'notlp' => '081231894694',
            'alamat' => 'Jl Raya',
            'status' => 1,
            'kode_member' => 3
        ]);
        CustomerModel::insert([
            'nama' => 'Yosua',
            'poin' => 950,
            'email' => 'yosua@gmail.com',
            'password' => Hash::make('123'),
            'notlp' => '081231894694',
            'alamat' => 'Jl Raya',
            'status' => 1,
            'kode_member' => 4
        ]);
        CustomerModel::insert([
            'nama' => 'Mikhael',
            'poin' => 1700,
            'email' => 'mimi@gmail.com',
            'password' => Hash::make('123'),
            'notlp' => '081231894694',
            'alamat' => 'Jl Raya',
            'status' => 1,
            'kode_member' => 5
        ]);
        factory(CustomerModel::class,10)->make()->each(function($customer){
            $customer->save();
        });
    }
}
