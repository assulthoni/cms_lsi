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

use App\Http\Controllers\TampilkanPertahunController;

Route::get('/', function () {
    return view('landing');
});
Route::group(array('before' => 'auth'),function(){
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

  //filter
  Route::get('tampilkanpertahun/{id}', 'TampilkanPertahunController@filter');
  Route::get('programstudi/fti/{id}', 'FTIController@filter');
  Route::get('programstudi/ftsp/{id}', 'FTSPController@filter');
  Route::get('kategori/{id}', 'KategoriController@filter');

  Route::resource('tampilkansemua','TampilkanSemuaController');
  Route::resource('tampilkanpertahun','TampilkanPertahunController');
  Route::resource('programstudi/fti','FTIController');
  Route::resource('programstudi/ftsp','FTSPController');
  Route::resource('kategori','KategoriController');
  Route::resource('menuuser','MenuUserController');
  Route::resource('menuta','MenuTAController');
  Route::resource('menukategori','MenuKategoriController');

});
Auth::routes();
// Route::get('/search', 'SearchController@index')->name('search');
Route::get('/store', 'SearchController@create')->name('storeabstract');
Route::get('/search', 'SearchController@index')->name('searchquery');
