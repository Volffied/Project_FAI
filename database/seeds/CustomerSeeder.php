<?php

use Illuminate\Database\Seeder;
use App\Model\CustomerModel;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CustomerModel::class,10)->make()->each(function($customer){
            $customer->save();

        });
    }
}
