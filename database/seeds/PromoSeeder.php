<?php

use App\Model\PromoModel;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PromoModel::insert([
            'nama' => 'Christmas Special',
            'voucher' => 'NYXMAS',
            'potongan' => 7,
            'tanggal_awal' =>Carbon::now(),
            'tanggal_akhir' =>Carbon::parse('2021-01-01 00:00')->toDateTimeString(),
            'status' => 1,
            'created_at'    => Carbon::now()
        ]);

        PromoModel::insert([
            'nama' => 'Grand Opening',
            'voucher' => 'NEWONE',
            'potongan' => 10,
            'tanggal_awal' =>Carbon::now(),
            'tanggal_akhir' =>Carbon::parse('2021-01-01 00:00')->toDateTimeString(),
            'status' => 1,
            'created_at'    => Carbon::now()
        ]);
        PromoModel::insert([
            'nama' => 'Seasons',
            'voucher' => 'AUTUMN',
            'potongan' => 5,
            'tanggal_awal' =>Carbon::now(),
            'tanggal_akhir' =>Carbon::parse('2021-01-01 00:00')->toDateTimeString(),
            'status' => 1,
            'created_at'    => Carbon::now()
        ]);
        PromoModel::insert([
            'nama' => 'Black Friday',
            'voucher' => 'FRIYAY',
            'potongan' => 8,
            'tanggal_awal' =>Carbon::now(),
            'tanggal_akhir' =>Carbon::parse('2021-01-01 00:00')->toDateTimeString(),
            'status' => 1,
            'created_at'    => Carbon::now()
        ]);
        PromoModel::insert([
            'nama' => 'Winter Sale',
            'voucher' => 'WINTER',
            'potongan' => 3,
            'tanggal_awal' =>Carbon::now(),
            'tanggal_akhir' =>Carbon::parse('2021-01-01 00:00')->toDateTimeString(),
            'status' => 1,
            'created_at'    => Carbon::now()
        ]);

        PromoModel::insert([
            'nama' => "Santa's Gift",
            'voucher' => 'SANTAS',
            'potongan' => 2,
            'tanggal_awal' =>Carbon::now(),
            'tanggal_akhir' =>Carbon::parse('2021-01-01 00:00')->toDateTimeString(),
            'status' => 1,
            'created_at'    => Carbon::now()
        ]);
    }
}
