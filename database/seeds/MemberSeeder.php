<?php

use App\Model\JenisMemberModel;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisMemberModel::insert([
            'nama' => 'amateur',
            'potongan' => 0,
            'minimal_poin' => 0
        ]);

        JenisMemberModel::insert([
            'nama' => 'warrior',
            'potongan' => 5,
            'minimal_poin' => 150
        ]);

        JenisMemberModel::insert([
            'nama' => 'warlock',
            'potongan' => 8,
            'minimal_poin' => 250
        ]);

        JenisMemberModel::insert([
            'nama' => 'demigod',
            'potongan' => 10,
            'minimal_poin' => 500
        ]);
    }
}
