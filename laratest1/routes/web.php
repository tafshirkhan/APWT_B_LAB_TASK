<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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

Route::get('/register', 'RegisterController@index')->name('register.index');
Route::post('/register', 'RegisterController@verify')->name('register.varify');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.varify');

Route::get('/logout', 'LogoutController@index')->name('logout.index');
Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/system/sale', 'SystemController@index')->name('system.index');

//Route::group(['middleware'=>['userverify']], function(){ 

    Route::get('/system/product', 'ProductController@index')->name('product.index');
    Route::get('/system/product/existing_product', 'ProductController@existproduct')->name('product.existproduct');
    Route::get('/system/product/edit/{id}', 'ProductController@editproduct')->name('product.editproduct');
    Route::post('/system/product/edit/{id}', 'ProductController@updateproduct')->name('product.updateproduct');
    Route::get('/system/product/details/{id}', 'ProductController@productdetails')->name('product.productdetails');
    Route::get('/system/product/delete/{id}', 'ProductController@deleteproduct')->name('product.deleteproduct');
    Route::post('/system/product/delete/{id}', 'ProductController@destroyproduct')->name('product.destroyproduct');
    Route::get('/system/product/add_product', 'ProductController@addproduct')->name('product.addproduct');
    Route::post('/system/product/add_product', 'ProductController@insertproduct')->name('product.insertproduct');
    Route::get('/system/product/upcoming_product/{id}', 'ProductController@upcomingproduct')->name('product.upcomingproduct');



//});



// Route::get('/product/list', 'ProductController@list')->name('product.list');
// Route::get('/product/details/{id}', 'ProductController@details')->name('product.details');

// Route::get('/product/add', 'ProductController@index')->name('product.index');
// Route::post('/product/add', 'ProductController@insert')->name('product.insert');

// Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');
// Route::post('/product/delete/{id}', 'ProductController@destroy')->name('product.destroy');

// Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
// Route::post('/product/edit/{id}', 'ProductController@update')->name('product.update');

