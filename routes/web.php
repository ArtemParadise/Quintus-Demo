<?php

//use Illuminate\Support\Facades\Route;

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

Route::get('/welc', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminPanelController@index')->name('adminPanel')->middleware('auth');

Route::get('/admin/slider', 'SliderController@index')->name('sliderPanel');
Route::get('/admin/slider/add', 'SliderController@create')->name('createSlider');
Route::get('/admin/slider/edit/{id}', 'SliderController@edit')->name('editSlider');
Route::post('/admin/slider/', 'SliderController@store')->name('storeSlider');
Route::patch('/admin/slider/edit/{id}', 'SliderController@update')->name('updateSlider');
Route::delete('/admin/slider/{id}', 'SliderController@destroy')->name('deleteSlider');


//Quintus website
Route::get('/', 'Quintus\HomePageController@index')->name('mainPage');
Route::get('/about', 'Quintus\AboutPageController@index')->name('aboutPage');
Route::get('/single', 'Quintus\SinglePageController@index')->name('singlePage');
Route::get('/contact', 'Quintus\ContactPageController@index')->name('contactPage');
Route::get('/blog', 'Quintus\BlogPageController@index')->name('blogPage');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
