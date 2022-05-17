<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
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

//////////////////////////login////////////////////////////////////
Route::get('/pos', 'CobaController@login')->name('pos');
Route::post('/pos', 'CobaController@auth');

//////////////////////////////////////////////register////////////////////////////////
Route::get('/pos/daftar', 'CobaController@registerview')->name('daftarakun');
Route::post('/pos/daftar', 'CobaController@register')->name('registrasi');


////////////////////////////logout////////////////////////////////////////////////////////
Route::get('/logout', 'CobaController@logout');



///////////////////////////ADMIN MANAGER dasbor lte//////////////////////////////////////////
Route::get('/pos/admin/home', 'AdminController@home')->name('admindasbor');
Route::get('/pos/admin/akun', 'AdminController@adminprofil')->name('adminprofil');
Route::post('/pos/admin/akun/editprofiladmin', 'AdminController@editprofiladmin')->name('editprofiladmin');
Route::post('/pos/admin/poststatus', 'AdminController@poststatus')->name('poststatus');
Route::post('/pos/admin/postcomment', 'AdminController@postcomment')->name('postcomment');
Route::post('/pos/admin/postlikes', 'AdminController@postlikes')->name('postlikes');


//Punya Laravel
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'CobaController@login')->name('geniweb');
