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

Route::get('/home','HomePageController@index')->name('home');
Route::get('/','HomePageController@index')->name('home');
Route::get('/pricing', 'PackageController@pricing')->name('pricing');
Route::get('/aboutus', 'ContentController@aboutus')->name('aboutus');
Route::get('/services', 'ContentController@services')->name('services');
Route::get('/contact','QureyController@index')->name('contact');
Route::post('/contact','QureyController@store')->name('contact.store');

Route::middleware('auth')->group(function (){
    Route::get('/admin/dashboard','AdminController@index')->name('admin.index');

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

    Route::get('/admin/aboutus/edit','ContentController@editaboutus')->name('aboutus.edit');
    Route::put('/admin/aboutus/{aboutus}/update','ContentController@updateaboutus')->name('aboutus.update');

    Route::get('/admin/service','ContentController@index')->name('service.index');
    Route::get('/admin/service/create','ContentController@create')->name('service.create');
    Route::post('/admin/service/store','ContentController@store')->name('service.store');
    Route::get('/admin/service/{content}/edit','ContentController@edit')->name('service.edit');
    Route::put('/admin/service/{content}/update','ContentController@update')->name('service.update');
    Route::delete('/admin/service/{service}/delete','ContentController@destroy')->name('service.destroy');

    Route::get('/admin/showallquries','QureyController@showall')->name('qurey.all');
    Route::delete('/admin/qurey/{qurey}/delete','QureyController@destroy')->name('qurey.destroy');

    Route::get('/admin/faq','FAQController@index')->name('faq.index');
    Route::get('/admin/faq/create','FAQController@create')->name('faq.create');
    Route::post('/admin/faq/store','FAQController@store')->name('faq.store');
    Route::get('/admin/FAQ/{FAQ}/edit','FAQController@edit')->name('faq.edit');
    Route::put('/admin/FAQ/{FAQ}/update','FAQController@update')->name('faq.update');
    Route::delete('/admin/FAQ/{FAQ}/delete','FAQController@destroy')->name('faq.destroy');

    Route::get('/admin/user','UserController@index')->name('user.index');
    Route::get('/admin/user/create','UserController@create')->name('user.create');
    Route::post('/admin/user/store','UserController@store')->name('user.store');
    Route::get('/admin/user/{user}/edit','UserController@edit')->name('user.edit');
    Route::put('/admin/user/{user}/update','UserController@update')->name('user.update');
    Route::delete('/admin/user/{user}/delete','UserController@destroy')->name('user.destroy');
});


