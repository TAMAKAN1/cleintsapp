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


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/add-category','CategoryController@index')->name('add.category');
    Route::post('/store-category','CategoryController@store')->name('store.category');
    Route::delete('/delete-category/{category}','CategoryController@delete')->name('delete.category');
    Route::patch('/update-category/{category}','CategoryController@update')->name('update.category');
    //car
    Route::post('/store-car','CarController@store')->name('store.car');
    Route::patch('/update-car/{car}','CarController@Update')->name('update.car');
    //single image delete
    Route::delete('/delete-inside/{image}','CarController@insideDelete')->name('inside.delete');
    Route::delete('/delete-out/{image}','CarController@outdelete')->name('out.delete');
    Route::delete('/delete-engine/{image}','CarController@engine')->name('engine.delete');
    //car-delete
    Route::delete('/delete-car/{car}','CarController@delete')->name('car.delete');
    //profile
    Route::get('/profile/{user}','HomeController@profile')->name('profile');
    Route::get('/update-profile/{user}','HomeController@updateProfile')->name('profile.update');
    //news
    Route::get('/news','NewsController@index')->name('add.news');
   Route::post('/store-news','NewsController@create')->name('store.news');
   Route::delete('/delete/{new}','NewsController@delete')->name('delete.new');
   Route::patch('/update-news/{new}','NewsController@update')->name('update.news');
   //single new image
   Route::delete('/delete-single-image/{image}','NewsController@image')->name('delete.new.image');
   
});