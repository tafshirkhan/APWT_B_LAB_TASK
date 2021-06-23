<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.varify');

Route::get('/product/list', 'ProductController@list')->name('product.list');
Route::get('/product/details/{id}', 'ProductController@details')->name('product.details');

Route::get('/product/add', 'ProductController@index')->name('product.index');
Route::post('/product/add', 'ProductController@insert')->name('product.insert');

Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');
Route::post('/product/delete/{id}', 'ProductController@destroy')->name('product.destroy');

Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/edit/{id}', 'ProductController@update')->name('product.update');

Route::get('/logout', 'LogoutController@index');
Route::get('/home', 'HomeController@index');