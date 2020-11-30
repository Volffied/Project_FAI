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
            'nama' => 'newborn',
            'potongan' => 0,
            'minimal_poin' => 0
        ]);

        JenisMemberModel::insert([
            'nama' => 'knight',
            'potongan' => 2,
            'minimal_poin' => 150
        ]);

        JenisMemberModel::insert([
            'nama' => 'sorcerer',
            'potongan' => 5,
            'minimal_poin' => 400
        ]);

        JenisMemberModel::insert([
            'nama' => 'king',
            'potongan' => 8,
            'minimal_poin' => 950
        ]);

        JenisMemberModel::insert([
            'nama' => 'demigod',
            'potongan' => 10,
            'minimal_poin' => 1700
        ]);
    }
}
