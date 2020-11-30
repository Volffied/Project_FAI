<?php

use App\Model\HorderModel;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Carbon\Carbon;

class HorderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HorderModel::insert([
            'tanggal_trans'     => Carbon::now(),
            'subtotal'          => 1800000,
            'grandtotal'        => 1800000,
            'metode_pembayaran' => 'bank_transfer',
            'status_order'      => 0,
            'kode_pegawai'      => 10,
            'kode_customer'     => 1
        ]);
        HorderModel::insert([
            'tanggal_trans'     => Carbon::now(),
            'subtotal'          => 1800000,
            'grandtotal'        => 1800000,
            'metode_pembayaran' => 'bank_transfer',
            'status_order'      => 0,
            'kode_pegawai'      => 9,
            'kode_customer'     => 1
        ]);
        HorderModel::insert([
            'tanggal_trans'     => Carbon::now(),
            'subtotal'          => 1800000,
            'grandtotal'        => 1800000,
            'metode_pembayaran' => 'bank_transfer',
            'status_order'      => 0,
            'kode_pegawai'      => 7,
            'kode_customer'     => 1
        ]);
        HorderModel::insert([
            'tanggal_trans'     => Carbon::now(),
            'subtotal'          => 1800000,
            'grandtotal'        => 1800000,
            'metode_pembayaran' => 'bank_transfer',
            'status_order'      => 0,
            'kode_pegawai'      => 5,
            'kode_customer'     => 1
        ]);
        HorderModel::insert([
            'tanggal_trans'     => Carbon::now(),
            'subtotal'          => 1800000,
            'grandtotal'        => 1800000,
            'metode_pembayaran' => 'bank_transfer',
            'status_order'      => 0,
            'kode_pegawai'      => 4,
            'kode_customer'     => 1
        ]);
        HorderModel::insert([
            'tanggal_trans'     => Carbon::now(),
            'subtotal'          => 1800000,
            'grandtotal'        => 1800000,
            'metode_pembayaran' => 'bank_transfer',
            'status_order'      => 0,
            'kode_pegawai'      => 3,
            'kode_customer'     => 1
        ]);
        HorderModel::insert([
            'tanggal_trans'     => Carbon::now(),
            'subtotal'          => 1800000,
            'grandtotal'        => 1800000,
            'metode_pembayaran' => 'bank_transfer',
            'status_order'      => 0,
            'kode_pegawai'      => 2,
            'kode_customer'     => 1
        ]);
        HorderModel::insert([
            'tanggal_trans'     => Carbon::now(),
            'subtotal'          => 1800000,
            'grandtotal'        => 1800000,
            'metode_pembayaran' => 'bank_transfer',
            'status_order'      => 0,
            'kode_pegawai'      => 1,
            'kode_customer'     => 1
        ]);
    }
}
