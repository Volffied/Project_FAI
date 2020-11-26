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
            'nama' => 'Promo Natal',
            'voucher' => 'NYXMAS',
            'potongan' => 10,
            'tanggal_awal' =>Carbon::now()->toDateTimeString(),
            'tanggal_akhir' =>Carbon::parse('2021-01-01 00:00')->toDateTimeString(),
            'status' => 1
        ]);
    }
}
