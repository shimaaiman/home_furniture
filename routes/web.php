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

Route::get('login', 'AuthController@login')->name('login');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('register', 'AuthController@register')->name('register');

Route::post('register', 'AuthController@do_register')->name('do_register');

Route::get('/','frontSiteController@showhome')->name('frontsite.index');
Route::get('/aboutus','frontSiteController@showaboutus')->name('frontsite.aboutus');
Route::get('/category','frontSiteController@showcategory')->name('frontsite.category');
Route::get('/cms','frontSiteController@showcms')->name('frontsite.cms');
Route::get('/productpage','frontSiteController@showproductpage')->name('frontsite.productpage');
Route::get('/pricing','frontSiteController@showpricing')->name('frontsite.pricing');
Route::get('/profile','frontSiteController@showprofile')->name('frontsite.profile');
Route::get('/howitworks','frontSiteController@showhowitworks')->name('frontsite.howitworks');


Route::namespace('Dashboard')->middleware('auth')->name('dashboard.')->prefix('admin')->group(function(){
     Route::get('/','DashboardCont@index')->name('home');
     Route::resource('product','productCont');
});



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('index', function () {
//     return view('frontsite.index');
// })->name('frontsite.index');

// Route::get('aboutus', function () {
//     return view('frontsite.aboutus');
// })->name('frontsite.aboutus');

// Route::get('category', function () {
//     return view('frontsite.category');
// })->name('frontsite.category');

// Route::get('cms', function () {
//     return view('frontsite.cms');
// })->name('frontsite.cms');

// Route::get('howitworks', function () {
//     return view('frontsite.howitworks');
// })->name('frontsite.howitworks');

// Route::get('pricing', function () {
//     return view('frontsite.pricing');
// })->name('frontsite.pricing');

// Route::get('productpage', function () {
//     return view('frontsite.productpage');
// })->name('frontsite.productpage');

// Route::get('profile', function () {
//     return view('frontsite.profile');
// })->name('frontsite.profile');