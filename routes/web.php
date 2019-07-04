<?php

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

Auth::routes();
Route::get('/frontend', 'FrontendController@index')->name('frontend/home');
Route::get('/frontend/about', 'FrontendController@about')->name('frontend/about');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/deteksi-lokasi', 'HomeController@geolocation')->name('deteksi-lokasi');
Route::get('/', 'HomeController@index');
/*
Route::get('/user', 'UserController@index');
Route::get('/user-register', 'UserController@create');
Route::post('/user-register', 'UserController@store');
Route::get('/user-edit/{id}', 'UserController@edit');
*/
Route::resource('user', 'UserController');
Route::resource('kampus', 'KampusController');
Route::get('/kampus/direction/{id}', array('as' => 'kampus.direction', 'uses' => 'KampusController@direction'));
Route::get('/format_kampus', 'KampusController@format');
Route::post('/import_kampus', 'KampusController@import');

Route::get('/laporan/kampus', 'LaporanController@kampus');
Route::get('/laporan/kampus/pdf', 'LaporanController@kampusPdf');
Route::get('/laporan/kampus/excel', 'LaporanController@kampusExcel');

Route::get('auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');
