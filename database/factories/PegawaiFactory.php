<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\PegawaiModel;
use Faker\Generator as Faker;


$factory->define(PegawaiModel::class, function (Faker $faker) {
    return [
        'nama'=>$faker->unique()->name,
        'email'=>$faker->unique()->freeEmail,
        'notlp'=>$faker->unique()->PhoneNumber,
        'password'=>Hash::make('123'),
        'jenis'=>$faker->numberBetween($min = 1, $max = 2),
        'status'=>1
    ];
});
