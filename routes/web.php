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
    return view('welcome');
});

Route::post('/recherche', 'SearchController@search');

Route::resource('/archives','ArchivesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/file_detail/{id}', 'HomeController@file_detail');
