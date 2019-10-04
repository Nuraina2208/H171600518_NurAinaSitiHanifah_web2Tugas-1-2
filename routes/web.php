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

route::get('/kategori_artikel','KategoriArtikelController@index')->name('kategori_artikel.index');
route::get('/kategori_artikel/create','KategoriArtikelController@create')->name('kategori_artikel.create');
route::post('/kategori_artikel','KategoriArtikelController@store')->name('kategori_artikel.store');
route::get('/kategori_artikel/{id}','KategoriArtikelController@show')->name('kategori_artikel.show');

route::get('/kategori_berita','KategoriBeritaController@index')->name('kategori_berita.index');
route::get('/kategori_berita/create','KategoriBeritaController@create')->name('kategori_berita.create');
route::post('/kategori_berita','KategoriBeritaController@store')->name('kategori_berita.store');
route::get('/kategori_berita/{id}','KategoriBeritaController@show')->name('kategori_berita.show');

route::get('/kategori_galeri','KategoriGaleriController@index')->name('kategori_galeri.index');
route::get('/kategori_galeri/create','KategoriGaleriController@create')->name('kategori_galeri.create');
route::post('/kategori_galeri','KategoriGaleriController@store')->name('kategori_galeri.store');
route::get('/kategori_galeri/{id}','KategoriGaleriController@show')->name('kategori_galeri.show');

route::get('/kategori_pengumuman','KategoriPengumumanController@index')->name('kategori_pengumuman.index');
route::get('/kategori_pengumuman/create','KategoriPengumumanController@create')->name('kategori_pengumuman.create');
route::post('/kategori_pengumuman','KategoriPengumumanController@store')->name('kategori_pengumuman.store');
route::get('/kategori_pengumuman/{id}','KategoriPengumumanController@show')->name('kategori_pengumuman.show');

route::get('/artikel','ArtikelController@index')->name('artikel.index');
route::get('/artikel/create','ArtikelController@create')->name('artikel.create');
route::post('/artikel','ArtikelController@store')->name('artikel.store');
route::get('/artikel/{id}','ArtikelController@show')->name('artikel.show');

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