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
//Route::get('/001', function () {return view('search');});
    /*搜尋頁面*/
//Route::get('/restaurant',['as' => 'restaurant' , 'uses' => 'RestaurantController@index']);
    /*執行搜尋*/
//Route::get('restaurant/search',['as' => 'restaurant.search' , 'uses' => 'RestaurantController@search']);

/*餐廳搜尋-有會員版*/
Route::get('restaurant/main',['as' => 'restaurant.search' , 'uses' => 'RestaurantController@search_1']);
/*餐廳搜尋-無會員版*/
Route::get('restaurant/main_nom',['as' => 'restaurant.search_nom' , 'uses' => 'RestaurantController@search_2']);

/*餐廳頁面-有會員版*/
Route::get('restaurant/{id}/home' ,['as' => 'restaurant{id}.home' , 'uses' => 'RestaurantController@home_1']);
Route::post('member_restaurant' ,['as' => 'restaurant.subscribe' , 'uses' => 'RestaurantController@restaurant_subscribe']);
/*餐廳頁面-無會員版*/
Route::get('restaurant/{id}/nom_home' ,['as' => 'restaurant.home' , 'uses' => 'RestaurantController@home_2']);

/*用餐紀錄*/
Route::get('order/history' ,['as' => 'order.history' , 'uses' => 'OrderController@index']);
Route::get('order/history/{id}' ,['as' => 'order.history.item' , 'uses' => 'OrderController@item']);

/*會員QR*/
Route::get('member/Verification_Code/save' ,['as' => 'Verification.Code.save' , 'uses' => 'MemberController@VerificationCodeSave']);
Route::get('member/QRCode' ,['as' => 'member.QRCode' , 'uses' => 'MemberController@QR']);

//掃描QR頁面*/
Route::get('scanning', ['as' => 'scanning' , 'uses' => 'MemberController@scan']);

/*優惠卷*/
Route::get('coupon' ,['as' => 'coupon' , 'uses' => 'CouponController@index']);
Route::get('coupon/{id}' ,['as' => 'coupon.index' , 'uses' => 'CouponController@edit']);

/*個人資料*/
Route::get('personal' ,['as' => 'personal' , 'uses' => 'MemberController@person']);
Route::get('personal/{id}/edit' ,['as' => 'personal.modi' , 'uses' => 'MemberController@modi']);
Route::patch('personal/{id}' ,['as' => 'personal.modi.update' , 'uses' => 'MemberController@modiupdate']);

/*我的最愛*/
Route::get('favorite' ,['as' => 'favorite' , 'uses' => 'MemberRestaurantController@index']);
Route::delete('member_restaurant/{id}' ,['as' => 'restaurant.unsubscribe' , 'uses' => 'RestaurantController@destroy']);

/*測試*/
Route::get('/000', function () {return view('test');});

Route::get('restaurant/{id}/test_home',['as' => 'test' , 'uses' => 'RestaurantController@test_home']);



/*會員登入部分*/
/*登入畫面*/
Route::get('login/create' ,['as' => 'login.create' , 'uses' => 'LoginController@create']);