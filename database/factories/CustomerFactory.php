<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\CustomerModel;
use Faker\Generator as Faker;

$factory->define(CustomerModel::class, function (Faker $faker) {
    return [
        'nama'=>$faker->unique()->name,
        'poin'=>0,
        'email'=>$faker->unique()->freeEmail,
        'password'=>Hash::make('123'),
        'notlp'=>$faker->unique()->PhoneNumber,
        'alamat'=>$faker->unique()->address,
        'status'=>1,
        'kode_jenis_member'=>$faker->numberBetween($min = 1, $max = 3)
    ];
});
