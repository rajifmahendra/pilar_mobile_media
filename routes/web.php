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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function (){
    return redirect('/home');
});



Route::group(['prefix' => '/', 'namespace' => 'Frontend'], function(){
   
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store')->name('store.contact');
Route::get('/gallery', 'GalleryController@index');
Route::get('/product', 'ProductController@index');
Route::get('/product/{id?}', 'ProductController@detail');
Route::get('/pricelist', 'PriceListController@index');
});

Auth::routes();

