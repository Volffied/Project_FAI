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

Route::get('/','UserController@HalAwal');
Route::get('Admin', 'controllerAdmin@HalPageAdmin');
Route::get('Master', 'controllerAdmin@HalPageMaster');
Route::get('Kurir', 'controllerAdmin@HalPageKurir');
Route::get('loginAdmin', 'controllerAdmin@HalPageLogin');
Route::post('prosesloginAdmin', 'controllerAdmin@LoginAdmin');
Route::get('logoutAdmin', 'ControllerAdmin@LogoutAdmin');
Route::group(['prefix' => 'Master'], function () {
    Route::get('pegawai','controllerAdmin@HalPagemPegawai');
    Route::post('tambahPegawai', 'controllerAdmin@addPegawai');
});
Route::group(['prefix' => 'Kurir'], function () {

});
Route::group(['prefix' => 'Cservice'], function () {

});
Route::group(['prefix' => 'Admin'], function () {
    Route::post('tambahKategori', 'controllerAdmin@addKategori');
    Route::post('tambahBarang', 'controllerAdmin@addBarang');
    Route::post('tambahJenisMember', 'controllerAdmin@addJenisMember');
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
Route::get('/index',function(){
    return redirect('/');
});
