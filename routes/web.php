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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Route::resource('kategori_artikel','KategoriArtikelController');
Route::get('kategori_artikel/trash','KategoriArtikelController@trash')->name('kategori_artikel.trash');

Route::resource('kategori_berita','KategoriBeritaController');
Route::get('kategori_berita/trash','KategoriBeritaController@trash')->name('kategori_berita.trash');

Route::resource('kategori_galeri','KategoriGaleriController');
Route::get('kategori_galeri/trash','KategoriGaleriController@trash')->name('kategori_galeri.trash');

Route::resource('kategori_pengumuman','KategoriPengumumanController');
Route::get('kategori_pengumuman/trash','KategoriPengumumanController@trash')->name('kategori_pengumuman.trash');

route::get('/artikel','ArtikelController@index')->name('artikel.index');
route::get('/artikel/create','ArtikelController@create')->name('artikel.create');
route::post('/artikel','ArtikelController@store')->name('artikel.store');
route::get('/artikel/{id}','ArtikelController@show')->name('artikel.show');
route::get('/artikel/{id}/edit','ArtikelController@edit')->name('artikel.edit');
route::patch('/artikel/{id}','ArtikelController@update')->name('artikel.update');

route::get('/berita','BeritaController@index')->name('berita.index');
route::get('/berita/create','BeritaController@create')->name('berita.create');
route::post('/berita','BeritaController@store')->name('berita.store');
route::get('/berita/{id}','BeritaController@show')->name('berita.show');

route::get('/galeri','GaleriController@index')->name('galeri.index');
route::get('/galeri/create','GaleriController@create')->name('galeri.create');
route::post('/galeri','GaleriController@store')->name('galeri.store');
route::get('/galeri/{id}','GaleriController@show')->name('galeri.show');

route::get('/pengumuman','PengumumanController@index')->name('pengumuman.index');
route::get('/pengumuman/create','PengumumanController@create')->name('pengumuman.create');
route::post('/pengumuman','PengumumanController@store')->name('pengumuman.store');
route::get('/pengumuman/{id}','PengumumanController@show')->name('pengumuman.show');