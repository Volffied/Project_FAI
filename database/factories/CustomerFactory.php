<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\CustomerModel;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(CustomerModel::class, function (Faker $faker) {
    $kode_member = $faker->numberBetween($min = 1, $max = 5);
    $poin = 0;
    if($kode_member == 2) $poin = 150;
    else if($kode_member == 3) $poin = 400;
    else if($kode_member == 4) $poin = 950;
    else if($kode_member == 5) $poin = 1700;
    return [
        'nama'=>$faker->unique()->name,
        'email'=>$faker->unique()->freeEmail,
        'poin'=>$poin,
        'password'=>Hash::make('123'),
        'notlp'=>$faker->unique()->PhoneNumber,
        'alamat'=>$faker->unique()->address,
        'status'=>$faker->numberBetween($min = 0,$max = 1),
        'kode_member'=> $kode_member
    ];
});
