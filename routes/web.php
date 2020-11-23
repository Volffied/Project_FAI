<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','Controller@HalAwal');
Route::get('Admin', 'controllerAdmin@HalPageAdmin');
Route::group(['prefix' => 'Admin'], function () {
    Route::get('pegawai','controllerAdmin@HalPagemPegawai');
    Route::get('barang','controllerAdmin@HalPagemBarang');
    Route::get('promo','controllerAdmin@HalPagemPromo');
    Route::get('member','controllerAdmin@HalPagemMember');
    Route::get('kategori','controllerAdmin@HalPagemkategori');

    Route::post('promoRoute','controllerAdmin@checkAddPromo');
});

Route::get('/register','UserController@Register');
Route::get('/login','UserController@Login');
Route::post('/prosesLogin','UserController@prosesLogin');
Route::post('/prosesRegister','UserController@prosesRegister');
Route::get('/index','UserController@HalAwal');
