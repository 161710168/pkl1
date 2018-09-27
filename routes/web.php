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
    return view('layouts.admin');
});
// Route::get('/about', function () {
//     return view('frontend.about');
// });
// Route::get('/berita', function () {
//     return view('frontend.berita');
// });
// Route::get('/kontak', function () {
//     return view('frontend.kontak');
// });
// Route::get('/galeri', function () {
//     return view('frontend.galeri');
// });
// Route::get('/login', function () {
//     return view('layouts.login');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kategori', 'KategoriController');
Route::resource('barang', 'BarangController');
Route::resource('tentang', 'TentangController');
Route::resource('artikel', 'ArtikelController');
Route::resource('kategoriartikel', 'KategoriArtikelController');

Route::group(['prefix'=> 'admin', 'middleware' => ['auth','role:admin']], function(){
    Route::resource('kategori','KategoriController');
    Route::resource('barang','BarangController');
    Route::resource('tentang','TentangController');
    Route::resource('artikel','ArtikelController');
    Route::resource('kategoriartikel','KategoriArtikelController');
    Route::resource('galeri','GaleriController');
    Route::resource('testimoni','TestimoniController');
});

