<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\KategoriModel;
use Faker\Generator as Faker;

$factory->define(KategoriModel::class, function (Faker $faker) {
    return [
        'nama'=>$faker->unique()->randomElement(['gear','component','console','accessories','pc'])
    ];
});
