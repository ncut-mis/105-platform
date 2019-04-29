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
    return view('index');
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


/*用餐紀錄*/
Route::get('order/history' ,['as' => 'order.history' , 'uses' => 'OrderController@index']);

/*會員QR*/
Route::get('member/Verification_Code/save' ,['as' => 'Verification.Code.save' , 'uses' => 'MemberController@VerificationCodeSave']);
Route::get('member/QRCode' ,['as' => 'member.QRCode' , 'uses' => 'MemberController@QR']);
//掃描QR頁面*/
Route::get('scanning', function () {
    return view('/scanning');
});


/*測試*/
//Route::get('/555', function () {
//    return view('index');
//});
Route::get('/5', function () {
    return view('auth.register3');
});


/*用餐紀錄*/
Route::get('order/history' ,['as' => 'order.history' , 'uses' => 'OrderController@index']);

/*會員QR*/
Route::get('member/QRCode' ,['as' => 'member.QRCode' , 'uses' => 'MemberController@QR']);

//掃描QR頁面*/
Route::get('scanning', function () {
    return view('/scanning');
});


/*會員登入部分*/
/*登入畫面*/
Route::get('login/create' ,['as' => 'login.create' , 'uses' => 'LoginController@create']);