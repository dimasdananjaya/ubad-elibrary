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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search-result', 'SearchController@searchResult')->name('search.result');


Route::get('/admin-home', 'AdminController@adminHome')->name('admin.home');
Route::get('/kelola-koleksi', 'CollectionController@kelolaKoleksi')->name('admin.kelola-koleksi');