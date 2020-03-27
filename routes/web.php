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
Route::get('/gallery', 'PagesController@gallery')->name('gallery');
Route::get('/services', 'PagesController@services')->name('services');
Route::get('/products', 'PagesController@products')->name('products');
Route::get('/contact-us', 'PagesController@contact')->name('contact');

Route::prefix('admin')->group(function () {
   Auth::routes(['register' => false]); 
   Route::get('/home', 'HomeController@index')->name('home');
   Route::get('/add-product', 'HomeController@addproduct')->name('addproduct');
   Route::post('post-product', 'HomeController@postproduct')->name('postproduct');
   Route::get('/view-product', 'HomeController@viewproduct')->name('viewproduct');
   Route::get('/add-material', 'HomeController@addmaterial')->name('addmaterial');
   Route::post('/post-material', 'HomeController@postmaterial')->name('postmaterial');
   Route::get('view-material', 'HomeController@viewmaterial')->name('viewmaterial');
   Route::get('/add-category', 'HomeController@addcategory')->name('addcategory');
   Route::post('/post-category', 'HomeController@postcategory')->name('postcategory');
   Route::get('view-category', 'HomeController@viewcategory')->name('viewcategory');
});

