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
Route::get('/product/{categoryslug}/{id}', 'PagesController@individualproduct')->name('individualproduct');
Route::get('/contact-us', 'PagesController@contact')->name('contact');
Route::get('/quotation/{id}', 'PagesController@quotation')->name('quotation');
Route::get('/quotation', 'PagesController@postquotation')->name('postquotation')

Route::prefix('admin')->group(function () {
   Auth::routes(['register' => false]); 
   Route::get('/home', 'HomeController@index')->name('home');
   Route::get('/add-product', 'HomeController@addproduct')->name('addproduct');
   Route::post('post-product', 'HomeController@postproduct')->name('postproduct');
   Route::get('/view-product', 'HomeController@viewproduct')->name('viewproduct');
   Route::get('/edit-product/{id}', 'HomeController@editproduct')->name('editproduct');
   Route::put('/edit-product/{id}', 'HomeController@editproductfinal')->name('editproductfinal');
   Route::delete('/delete-product/{id}', 'HomeController@deleteproduct')->name('deleteproduct');
   Route::get('/add-material', 'HomeController@addmaterial')->name('addmaterial');
   Route::post('/post-material', 'HomeController@postmaterial')->name('postmaterial');
   Route::get('/view-material', 'HomeController@viewmaterial')->name('viewmaterial');
   Route::get('/edit-material/{id}', 'HomeController@editmaterial')->name('editmaterial');
   Route::put('/edit-material/{id}', 'HomeController@posteditmaterial')->name('posteditmaterial');
   Route::delete('/delete-material/{id}', 'HomeController@deletematerial')->name('deletematerial');
   Route::get('/add-category', 'HomeController@addcategory')->name('addcategory');
   Route::post('/post-category', 'HomeController@postcategory')->name('postcategory');
   Route::get('/view-category', 'HomeController@viewcategory')->name('viewcategory');
   Route::get('/edit-category/{id}', 'HomeController@editcategory')->name('editcategory');
   Route::put('/edit-category/{id}', 'HomeController@posteditcategory')->name('posteditcategory');
   Route::delete('/delete-category/{id}', 'HomeController@deletecategory')->name('deletecategory');
   Route::get('/add-photo', 'HomeController@addphoto')->name('addphoto');
   Route::post('/post-photo', 'HomeController@postphoto')->name('postphoto');
   Route::get('/view-photo', 'HomeController@viewphoto')->name('viewphoto');
   Route::delete('/delete-photo/{id}', 'HomeController@deletephoto')->name('deletephoto');
});

