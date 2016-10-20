<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::any('testCaptcha',function(){
// 	return view('testCaptcha');
// });
// -------------------------------------------------------------------------------
//管理员认证模块
Route::group(['namespace'=>'Admin\Auth'],function (){
	Route::get('admin/login','LoginController@showLoginForm')->name('adminLoginForm');
	Route::post('admin/login','LoginController@login');
    Route::get('admin/logout','LoginController@logout');
    Route::get('admin/register', 'RegisterController@showRegistrationForm');
Route::post('admin/register', 'RegisterController@register')->name('adminRegister');
});
// -----------------------------------------------------------------------------
// 管理后台模块
Route::group(['namespace'=>'Admin'],function () {
    // 后台首页
    Route::get('home/admin','AdminController@index')->name('adminHome');
    //功能子模块分流
    Route::get('admin/productManagerCenter','ManagerController@productManagerCenter')->name('productsCenter');
    Route::get('admin/messageManagerCenter','ManagerController@messageManagerCenter')->name('messageCenter');
    Route::get('admin/cateManagerCenter','ManagerController@cateCenter')->name('cateCenter');
     Route::get('admin/orderFormManagerCenter','ManagerController@orderFormCenter')->name('orderFormCenter');
    //消息管理
    Route::get('admin/messageForm','messageController@messageForm')->name('messageForm');
    Route::post('admin/sendNotification','messageController@sendNotification')->name('sendNotification');
    // 产品管理
    Route::post('products','productController@store')->name('product.store');
    Route::get('products/content/{content}','productController@show')->name('product.show');
    Route::get('products/detail/{id}','productController@detail')->name('product.detail');
    Route::get('products/{product}/delete','productController@destroy')->name('product.delete');
    Route::resource('products', 'productController',['except'=>['destroy','store','show']]);
    //品类管理
     Route::get('cate/{cate}/delete','cateController@destroy')->name('cate.delete');
    Route::resource('cates', 'cateController',['except'=>['destroy']]);

});


Route::group(['namespace'=>'Customer\Auth'],function(){
 Route::get('login', 'LoginController@showLoginForm')->name('customerLoginForm');
 Route::post('customer/login', 'LoginController@login');
 Route::get('customer/logout', 'LoginController@logout');
 Route::get('customer/registerForm', 'RegisterController@showRegistrationForm');
 Route::any('customer/register', 'RegisterController@register')->middleware('geetest');
 Route::any('customer/weibo','LoginController@weibo');
 Route::any('customer/weiboCallBack','LoginController@weiboCallBack')->name('weiboCallBack');
Route::get('customer/emailForm','ForgotPasswordController@showLinkRequestForm');
Route::post('customer/sendEmail','ForgotPasswordController@sendResetLinkEmail');
  Route::get('customer/password/reset/{token?}','ResetPasswordController@showResetForm');
    Route::post('customer/password/reset','ResetPasswordController@reset');
    Route::any('auth/{service}', 'authController@redirectToProvider');
    Route::any('auth/{service}/callback', 'authController@handleProviderCallback');
});
// shop是购物相关模块，customer是用户功能模块,info是消息中心,search是搜索服务
Route::group(['namespace'=>'Customer'],function (){
    Route::get('home/customer','CustomerController@index')->name('customerHome');
    Route::get('customer/shopCart','shopController@showShopCart');
    Route::get('customer/checkOut','shopController@checkOut');
    Route::get('customer/center','CustomerController@customerCenter')->name('customerCenter');
      Route::get('customer/infoCenter','CustomerController@infoCenter')->name('infoCenter');
Route::get('customer/HighLevel','CustomerController@forHighLevel')->name('HighLevel');
   Route::get('customer/allInfo/{customer?}','infoController@allInfo')->name('allInfo');
    Route::get('customer/unreadInfo/{customer?}','infoController@unreadInfo')->name('unreadInfo');
    Route::get('customer/deleteInfo/{customer?}','infoController@deleteInfo')->name('deleteInfo');
     Route::post('customer/search/{args?}','searchController@search')->name('customer.search');
});

 Route::get('getCaptcha',function(){
    $captcha = new \Laravist\GeeCaptcha\GeeCaptcha(env('CAPTCHA_ID'),env('PRIVATE_KEY'));
    echo $captcha->GTServerIsNormal();
 });

 // 设置只有认证过的用户才能进到的路由
// Route::get('profile', ['middleware' => 'auth', function() {
    // 只有认证过的用户能进来这里...
// }]);
// 设置只有认证过的用户才会到达的路由
// public function __construct()
// {
    // $this->middleware('auth');
    // 还需要设置设置guard
    //  $this->middleware('auth:api');
// }
