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

Route::group(['namespace'=>'Admin\Auth'],function (){
	Route::get('admin/login','loginController@showLoginForm');
	Route::post('admin/login','loginController@login');
    Route::post('admin/logout','loginController@logout');
    Route::get('admin/register', 'RegisterController@showRegistrationForm');
    Route::post('admin/register', 'RegisterController@register');
   // Route::post('admin/login','loginController@login')->middleware('auth_admin');
});
Route::group(['namespace'=>'Admin'],function () {
    Route::get('home/admin','AdminController@index');
    Route::get('admin/sendNotification','ManagerController@sendNotification')->name('sendNotification');
});


Route::group(['namespace'=>'Customer\Auth'],function(){
 Route::get('login', 'LoginController@showLoginForm');
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

Route::group(['namespace'=>'Customer'],function (){
    Route::get('home/customer','CustomerController@index')->name('customerHome');
    Route::get('customer/shopCart','shopController@showShopCart');
    Route::get('customer/checkOut','shopController@checkOut');
    Route::get('customer/center','shopController@customerCenter')->name('customerCenter');
    Route::get('customer/message','shopController@messageCenter')->name('messageCenter');
});

 Route::get('getCaptcha',function(){
    $captcha = new \Laravist\GeeCaptcha\GeeCaptcha(env('CAPTCHA_ID'),env('PRIVATE_KEY'));
    echo $captcha->GTServerIsNormal();
 });

 Route::controller('user','userController');
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
