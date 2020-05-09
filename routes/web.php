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

//Admin panel
Route::get('/admin', 'Admin\AdminPanelController@index')->name('adminPanel')->middleware('auth');

//Slider Panel
Route::get('/admin/slider', 'Admin\SliderController@index')->name('sliderPanel');
Route::get('/admin/slider/add', 'Admin\SliderController@create')->name('createSlider');
Route::get('/admin/slider/edit/{id}', 'Admin\SliderController@edit')->name('editSlider');
Route::post('/admin/slider/', 'Admin\SliderController@store')->name('storeSlider');
Route::patch('/admin/slider/edit/{id}', 'Admin\SliderController@update')->name('updateSlider');
Route::delete('/admin/slider/{id}', 'Admin\SliderController@destroy')->name('deleteSlider');

//Clients Brand wall
Route::get('admin/brandwall', 'Admin\ClientsBrandController@index')->name('brandPanel');
Route::get('admin/brandwall/add', 'Admin\ClientsBrandController@create')->name('createBrand');
Route::get('admin/brandwall/edit/{id}', 'Admin\ClientsBrandController@edit')->name('editBrand');
Route::post('admin/brandwall', 'Admin\ClientsBrandController@store')->name('storeBrand');
Route::patch('admin/brandwall/edit/{id}', 'Admin\ClientsBrandController@update')->name('updateBrand');
Route::delete('admin/brandwall/{id}', 'Admin\ClientsBrandController@destroy')->name('deleteBrand');

//Posts panel
Route::get('admin/posts', 'Admin\PostController@index')->name('postsPanel');
Route::get('admin/posts/add', 'Admin\PostController@create')->name('createPost');
Route::get('admin/posts/edit/{id}', 'Admin\PostController@edit')->name('editPost');
Route::post('admin/posts', 'Admin\PostController@store')->name('storePost');
Route::patch('admin/posts/edit/{id}', 'Admin\PostController@update')->name('updatePost');
Route::delete('admin/posts/{id}', 'Admin\PostController@destroy')->name('deletePost');

//Categories panel
Route::get('admin/categories', 'Admin\CategoriesController@index')->name('categoriesPanel');
Route::get('admin/categories/add', 'Admin\CategoriesController@create')->name('createCategory');
Route::get('admin/categories/edit/{id}', 'Admin\CategoriesController@edit')->name('editCategory');
Route::post('admin/categories', 'Admin\CategoriesController@store')->name('storeCategory');
Route::patch('admin/categories/edit/{id}', 'Admin\CategoriesController@update')->name('updateCategory');
Route::delete('admin/categories/{id}', 'Admin\CategoriesController@destroy')->name('deleteCategory');


//Quintus website
Route::get('/', 'Quintus\HomePageController@index')->name('mainPage');
Route::get('/about', 'Quintus\AboutPageController@index')->name('aboutPage');
Route::get('/single', 'Quintus\SinglePageController@index')->name('singlePage');
Route::get('/contact', 'Quintus\ContactPageController@index')->name('contactPage');
Route::get('/blog', 'Quintus\BlogPageController@index')->name('blogPage');

//Send contact form
Route::post('contact/send', 'Quintus\Contact\ContactFormController@sendMessage')->name('sendContact');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
