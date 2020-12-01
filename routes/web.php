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
    Route::get('changeAntarHorder', 'controllerAdmin@HalPagemAntarHorder');
    Route::get('laporanPenjualan', 'controllerAdmin@HalPagemLaporanPenjualan');
    Route::get('laporanBarangLaris', 'controllerAdmin@HalPagemLaporanBarangLaris');
});
Route::group(['prefix' => 'Cservice'], function () {

});
Route::group(['prefix' => 'Admin'], function () {
    Route::post('tambahKategori', 'controllerAdmin@addKategori');
    Route::post('tambahBarang', 'controllerAdmin@addBarang');
    Route::post('delBarang', 'controllerAdmin@DeleteBarang');
    Route::post('delMember', 'controllerAdmin@DeleteJenisMember');
    Route::post('delBrand', 'controllerAdmin@DeleteBrand');
    Route::post('delKategori', 'controllerAdmin@DeleteKategori');
    Route::post('delPromo', 'controllerAdmin@DeletePromo');
    Route::post('tambahJenisMember', 'controllerAdmin@addJenisMember');
    Route::post('tambahBrand', 'controllerAdmin@addBrand');
    Route::get('barang','controllerAdmin@HalPagemBarang');
    Route::get('promo','controllerAdmin@HalPagemPromo');
    Route::get('member','controllerAdmin@HalPagemMember');
    Route::get('kategori','controllerAdmin@HalPagemkategori');
    Route::get('brand','controllerAdmin@HalPagemBrand');
    Route::post('promoRoute','controllerAdmin@checkAddPromo');
});

Route::get('/register','UserController@Register');
Route::get('/addToCart/{id}_{qty}','UserController@addToCart');
Route::get('/updateCart/{id_user}_{id_barang}_{qty?}','UserController@updateCart');
Route::get('/checkPromo/{checkBy}_{value}','UserController@checkPromo');
Route::get('/login','UserController@Login');
Route::get('/brand/{nama}','UserController@Brand');
Route::get('/cart','UserController@Cart');
Route::get('/search','UserController@Search');
Route::get('/profile','UserController@Profile');
Route::get('/product/{nama}','UserController@Product');
Route::post('/prosesLogin','UserController@prosesLogin');
Route::post('/prosesRegister','UserController@prosesRegister');
Route::get('/index',function(){
    return redirect('/');
});
Route::get('/home',function(){
    return redirect('/');
});

//midtrans
Route::post('dataPayment', 'midtransController@dataPayment');
Route::post('saveData', 'midtransController@saveData');
Route::get('pagePayment', 'midtransController@pagePayment');
Route::get('insertOrder', 'midtransController@insertOrder');
Route::get("updateEmail/{id}","controllerEmail@updateEmail");
Route::get("verifikasiEmail/{id}","controllerEmail@updatedataEmail");
Route::post("chatsend",'Controller@checkChat');
Route::get("getChat",'Controller@getChat');
