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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about-us', 'PagesController@about')->name('about');
Route::get('/services', 'PagesController@services')->name('services');
Route::get('/products', 'PagesController@products')->name('products');
Route::get('/contact-us', 'PagesController@contact')->name('contact');

Route::prefix('admin')->group(function () {
   Auth::routes(['register' => false]); 
   Route::get('/home', 'HomeController@index')->name('home');
});


