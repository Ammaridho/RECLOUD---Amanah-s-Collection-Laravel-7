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

// beranda
Route::get('/','Frontend\BerandaController@index');

// Signup
Route::post('/signup','auth\authController@signup');

//Login
Route::post('/login','auth\authController@ceklogin');

Route::get('/keranjang','Frontend\keranjangController@tampil')->name('a');

//Access Restrict =========================================================================
Route::group(['middleware' => 'ceksession'], function(){

    Route::get('/logout','auth\authController@logout');

    //keranjang
        

    //pulau
        Route::get('/pulau','Frontend\PulauController@index')->name('pulau');

        Route::get('/menu','Frontend\MenuSideController@index')->name('menu');

        Route::get('/subtari','Frontend\MenuSideController@subtari')->name('subtari');

        Route::get('/inputdetail','Frontend\InputDetailSideController@index')->name('inputdetail');
        Route::post('/inputdetail','Frontend\InputDetailSideController@store')->name('storeInputDetail');

        Route::get('/inputdetail/inputukuran','Frontend\InputDetailSideController@inputUkuran')->name('inputdetailukuran');

});


