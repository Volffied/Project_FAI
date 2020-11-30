<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //ALTER TABLE tablename AUTO_INCREMENT = 1
        //composer dump-autoload
        Model::unguard();
        $seeders = array ('PegawaiSeeder','CustomerSeeder','KategoriSeeder','BarangSeeder','BrandSeeder','PromoSeeder','MemberSeeder','HorderSeeder');

        foreach ($seeders as $seeder)
        {
            $this->call($seeder);
        }

    }
}
