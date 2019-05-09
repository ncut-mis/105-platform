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
Route::get('order/history/{id}' ,['as' => 'order.history.item' , 'uses' => 'OrderController@item']);

/*會員QR*/
Route::get('member/Verification_Code/save' ,['as' => 'Verification.Code.save' , 'uses' => 'MemberController@VerificationCodeSave']);
Route::get('member/QRCode' ,['as' => 'member.QRCode' , 'uses' => 'MemberController@QR']);


/*餐廳搜尋*/
Route::get('restaurant/main',['as' => 'restaurant.search' , 'uses' => 'RestaurantController@search']);

//掃描QR頁面*/
Route::get('scanning', ['as' => 'scanning' , 'uses' => 'MemberController@scan']);

/*優惠卷*/
Route::get('coupon' ,['as' => 'coupon' , 'uses' => 'CouponController@index']);
Route::get('coupon/{id}' ,['as' => 'coupon.index' , 'uses' => 'CouponController@edit']);

/*個人資料*/
Route::get('personal' ,['as' => 'personal' , 'uses' => 'MemberController@person']);


/*測試*/




/*會員登入部分*/
/*登入畫面*/
Route::get('login/create' ,['as' => 'login.create' , 'uses' => 'LoginController@create']);