<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

//lihat view test
Route::get('/testview','test\testController@index');


// beranda
Route::get('/','Frontend\BerandaController@index');

// Signup
Route::post('/signup','auth\authController@signup');

//Login
Route::post('/login','auth\authController@ceklogin');

//Access Restrict =========================================================================
Route::group(['middleware' => 'ceksession'], function(){

    //logout
        Route::get('/logout','auth\authController@logout');

    //keranjang
        Route::get('/keranjang','Frontend\keranjangController@tampil')->name('a');
        Route::get('/keranjang/detail','Frontend\keranjangController@lihat')->name('editInputDetail');
        Route::get('/inputdetail/detail/editUkuran','Frontend\keranjangController@editUkuran')->name('editUkuran');
        Route::post('/keranjang/editrestore','Frontend\keranjangController@editrestore')->name('storeEditKeranjang');
        Route::post('/keranjang/delete','Frontend\keranjangController@destroy')->name('deleteKeranjang');
        Route::post('/keranjang/deletemulti','Frontend\keranjangController@destroymulti')->name('deleteKeranjangmulti');

    //cekout
        Route::get('/cekout','Frontend\cekoutController@cek')->name('cekout');
        Route::get('/rincianCekout','Frontend\cekoutController@rincianCekout')->name('rincianCekout');

    //transaksi
        Route::get('/lihatTransaksi','Frontend\transaksiController@lihat')->name('lihatTransaksi');

    //pulau
        Route::get('/pulau','Frontend\PulauController@index')->name('pulau');

        Route::get('/menu','Frontend\MenuSideController@index')->name('menu');

        Route::get('/subtari','Frontend\MenuSideController@subtari')->name('subtari');

        Route::get('/inputdetail','Frontend\InputDetailSideController@index')->name('inputdetail');
        Route::post('/inputdetail','Frontend\InputDetailSideController@store')->name('storeInputDetail');

        Route::get('/inputdetail/inputukuran','Frontend\InputDetailSideController@inputUkuran')->name('inputdetailukuran');

});



