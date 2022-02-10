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

Route::get('/home', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::get('/show/{id}', 'PagesController@show');

Route::get('/create', 'PagesController@create');

Route::post('/saveproduct', 'PagesController@store');

Route::post('/update/{id}', 'PagesController@update')->name('update');

Route::get('/edit/{id}', 'PagesController@edit');

Route::get('/delete/{id}', 'PagesController@delete')->name('delete');

Route::resource('products','ProductController');



Route::get('/', 'ClientController@index');
Route::get('/login', 'ClientController@login');
Route::get('/cart', 'ClientController@cart');
Route::post('/cart/Qty/update/{id}', 'ClientController@update')->name('UpdateQty');
Route::get('/cart/remove/{id}', 'ClientController@remove')->name('RemoveItem');
Route::get('/shop', 'ClientController@shop');
Route::get('/addToCart/{product_id}','ClientController@addToCart');
Route::get('/shop/{category_id}', 'ClientController@categories');
Route::get('/checkout', 'ClientController@checkout');
Route::post('/checkout/store', 'ClientController@postcheckout')->name('postcheckout');
Route::get('/register', 'ClientController@register');
Route::post('/createAccount', 'ClientController@createaccount');
Route::post('/loginAccount', 'ClientController@loginaccount');
Route::get('/logout', 'ClientController@logout');



Route::get('/admin/dashboard', 'AdminController@index');
Route::get('/admin/orders', 'AdminController@orders');

Route::get('/admin/products', 'ProductController@index');
Route::get('/admin/product/create', 'ProductController@create');
Route::post('/admin/product/store', 'ProductController@store');
Route::get('/admin/product/edit/{id}', 'ProductController@edit');
Route::post('/admin/product/update/{id}', 'ProductController@update')->name('UpdateProduct');
Route::get('/admin/product/destroy/{id}', 'ProductController@destroy')->name('DeleteProduct');



Route::get('/admin/categories', 'CategoryController@index');
Route::get('/admin/category/create', 'CategoryController@create');
Route::post('/admin/category/store', 'CategoryController@store');
Route::get('/admin/category/edit/{id}', 'CategoryController@edit')->name('EditCategory');
Route::post('/admin/category/update/{id}', 'CategoryController@update')->name('UpdateCategory');
Route::get('/admin/category/delete/{id}', 'CategoryController@delete')->name('DeleteCategory');


Route::get('/admin/sliders', 'SliderController@index');
Route::get('/admin/slider/create', 'SliderController@create');
Route::post('/admin/slider/store', 'SliderController@store');
Route::get('/admin/slider/edit/{id}', 'SliderController@edit');
Route::post('/admin/slider/update/{id}', 'SliderController@update')->name('UpdateSlider');
Route::get('/admin/slider/destroy/{id}', 'SliderController@destroy')->name('DeleteSlider');
Route::get('/admin/slider/unactivate/{id}', 'SliderController@unactivate');
Route::get('/admin/slider/activate/{id}', 'SliderController@activate');

Route::get('/view_pdf/{id}' , 'Pdfcontroler@view_pdf');

Route::get('/admin/test', 'SliderController@test');
