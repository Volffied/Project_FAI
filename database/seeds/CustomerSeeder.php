<?php

use Illuminate\Database\Seeder;
use App\Model\CustomerModel;
use App\Model\DchatModel;
use App\Model\HchatModel;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
        HchatModel::insert([
            "kode_customer" =>  1,
            "occupied" => 0
        ]);
            //========================================
        DchatModel::insert([
            "kode_hchat"    => 1,
            "pesan"         => "Halo, ".ucwords(strtolower('Marvel'))."!<br>Ada yang bisa kami bantu?",
            "sender"        => "Admin",
            "jenis"         => 1,
            "status"        => 0,
            "created_at"    => Carbon::now(),
            "updated_at"    => Carbon::now()
        ]);

        CustomerModel::insert([
            'nama' => 'William',
            'poin' => 150,
            'email' => 'robertwilliamt@yahoo.com',
            'password' => Hash::make('123'),
            'notlp' => '081231894694',
            'alamat' => 'Jl Raya',
            'status' => 1,
            'kode_member' => 2
        ]);

        HchatModel::insert([
            "kode_customer" =>  2,
            "occupied" => 0
        ]);
            //========================================
        DchatModel::insert([
            "kode_hchat"    => 2,
            "pesan"         => "Halo, ".ucwords(strtolower('William'))."!<br>Ada yang bisa kami bantu?",
            "sender"        => "Admin",
            "jenis"         => 1,
            "status"        => 0,
            "created_at"    => Carbon::now(),
            "updated_at"    => Carbon::now()
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

        HchatModel::insert([
            "kode_customer" =>  3,
            "occupied" => 0
        ]);
            //========================================
        DchatModel::insert([
            "kode_hchat"    => 3,
            "pesan"         => "Halo, ".ucwords(strtolower('Samuel'))."!<br>Ada yang bisa kami bantu?",
            "sender"        => "Admin",
            "jenis"         => 1,
            "status"        => 0,
            "created_at"    => Carbon::now(),
            "updated_at"    => Carbon::now()
        ]);

        CustomerModel::insert([
            'nama' => 'Yosua Yuwono',
            'poin' => 950,
            'email' => 'yosua@gmail.com',
            'password' => Hash::make('123'),
            'notlp' => '081231894694',
            'alamat' => 'Jl Raya',
            'status' => 0,
            'kode_member' => 4
        ]);

        HchatModel::insert([
            "kode_customer" =>  4,
            "occupied" => 0
        ]);
            //========================================
        DchatModel::insert([
            "kode_hchat"    => 4,
            "pesan"         => "Halo, ".ucwords(strtolower('yosua yuwono'))."!<br>Ada yang bisa kami bantu?",
            "sender"        => "Admin",
            "jenis"         => 1,
            "status"        => 0,
            "created_at"    => Carbon::now(),
            "updated_at"    => Carbon::now()
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

        HchatModel::insert([
            "kode_customer" =>  5,
            "occupied" => 0
        ]);
            //========================================
        DchatModel::insert([
            "kode_hchat"    => 5,
            "pesan"         => "Halo, ".ucwords(strtolower('Mikhael'))."!<br>Ada yang bisa kami bantu?",
            "sender"        => "Admin",
            "jenis"         => 1,
            "status"        => 0,
            "created_at"    => Carbon::now(),
            "updated_at"    => Carbon::now()
        ]);

        factory(CustomerModel::class,10)->make()->each(function($customer){
            $customer->save();
        });
    }
}
