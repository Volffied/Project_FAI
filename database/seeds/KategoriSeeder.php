<?php

use Illuminate\Database\Seeder;
use App\Model\KategoriModel;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(KategoriModel::class,5)->make()->each(function($kategori){
            $kategori->save();
        });
    }
}
