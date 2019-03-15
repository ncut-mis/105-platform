<?php

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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*搜尋*/
Route::get('/001', function () {return view('search');});
    /*搜尋頁面*/
Route::get('/restaurant',['as' => 'restaurant' , 'uses' => 'RestaurantController@index']);
    /*執行搜尋*/
Route::get('restaurant/search',['as' => 'restaurant.search' , 'uses' => 'RestaurantController@search']);

/*餐廳頁面*/
Route::get('restaurant/{id}/home' ,['as' => 'restaurant{id}.home' , 'uses' => 'RestaurantController@home']);