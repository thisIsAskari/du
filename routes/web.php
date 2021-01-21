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

//Route::get('/', function () {
//    return view('index');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/','HomePageController@index')->name('home');
Route::get('/pricing', 'PackageController@pricing')->name('pricing');

Route::get('/admin/index','AdminController@index')->name('admin.index');

Route::get('/admin/homeheader/{homepage}/edit','HomePageController@edithomeheader')->name('home.homeheader');
Route::put('/admin/homeheader/{homepage}/update','HomePageController@updatehomeheader')->name('home.homeheader.update');

Route::get('/admin/internetservices/{internetservices}/edit','HomePageController@editinternetservices')->name('home.internetservices');
Route::put('/admin/internetservices/{internetservices}/update','HomePageController@updateinternetservices')->name('home.internetservices.update');

Route::get('/admin/aboutsection/{aboutsection}/edit','HomePageController@editaboutsection')->name('home.aboutsection');
Route::put('/admin/aboutsection/{aboutsection}/update','HomePageController@updateaboutsection')->name('home.aboutsection.update');

Route::get('/admin/allservices/{allservices}/edit','HomePageController@editallservices')->name('home.allservices');
Route::put('/admin/allservices/{allservices}/update','HomePageController@updateallservices')->name('home.allservices.update');

Route::get('/admin/packagessection/{packagessection}/edit','HomePageController@editpackagessection')->name('home.packagessection');
Route::put('/admin/packagessection/{packagessection}/update','HomePageController@updatepackagessection')->name('home.packagessection.update');

Route::get('/admin/faqsection/{faqsectionsection}/edit','HomePageController@editfaqsection')->name('home.faqsection');
Route::put('/admin/faqsection/{faqsectionsection}/update','HomePageController@updatefaqsection')->name('home.faqsection.update');

Route::get('/admin/package','PackageController@index')->name('package.index');
Route::get('/admin/package/create','PackageController@create')->name('package.create');
Route::post('/admin/package/store','PackageController@store')->name('package.store');
Route::get('/admin/package/{package}/edit','PackageController@edit')->name('package.edit');
Route::put('/admin/package/{package}/update','PackageController@update')->name('package.update');
Route::delete('/admin/package/{package}/delete','PackageController@destroy')->name('package.destroy');

