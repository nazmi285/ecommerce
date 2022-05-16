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
    // return view('welcome');
    return redirect('login');
});

Auth::routes(['verify' => true]);
//Google Authentication Routes
Route::get('auth/google', 'SocialController@redirectToGoogle');
Route::get('auth/google/callback', 'SocialController@googleCallback');

Route::get('/store',function(){
	return view('public');
})->name('store');


Route::group(['middleware' => ['auth', 'verified']], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/product', 'HomeController@index')->name('product');

	
	// Route::get('/product', Products::class)->name('product');
	// Route::get('/product/create', 'HomeController@index')->name('product.create');
	Route::get('/explore', 'HomeController@index')->name('explore');
	Route::get('/notification', 'HomeController@index')->name('notification');
	Route::get('/setting', 'HomeController@index')->name('setting');
	Route::get('/familytree', 'HomeController@index')->name('familytree');
	Route::get('/firebase', 'HomeController@index')->name('firebase');
	Route::get('/bootstrap', 'HomeController@index')->name('bootstrap');
	Route::get('/profile', 'HomeController@index')->name('profile');
	Route::get('/booking', 'HomeController@index')->name('booking');

});	

//////////////////////////////////////////////////////////////////////////    ADMIN
Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm');
Route::post('/admin/login', 'Auth\LoginController@adminLogin')->name('admin/login');
Route::get('/admin/password/reset', 'Auth\LoginController@adminLogin');
Route::post('/admin/password/reset', 'Auth\LoginController@adminLogin');

Route::group(['middleware' => ['throttle', 'auth:admin', 'verified']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('home', 'AdminController@index')->name('admin.home');
    });
});