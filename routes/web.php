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

Route::group(['namespace'=>'admin'],function (){
	Route::get('admin/login','loginController@showLoginForm');
	Route::post('admin/login','loginController@login');
  Route::post('admin/logout','loginController@logout');
  Route::get('admin/register', 'RegisterController@showRegistrationForm');
  Route::post('admin/register', 'RegisterController@register');
   // Route::post('admin/login','loginController@login')->middleware('auth_admin');
});
Route::get('home/admin','AdminController@index');

Route::group(['namespace'=>'Customer'],function(){
 Route::get('login', 'LoginController@showLoginForm');
 Route::post('customer/login', 'LoginController@login');
 Route::get('customer/hello', 'LoginController@hello');
 Route::get('customer/logout', 'LoginController@logout');
 Route::get('customer/registerForm', 'RegisterController@showRegistrationForm');
 Route::post('customer/register', 'RegisterController@register')->middleware('geetest');
 Route::any('customer/weibo','LoginController@weibo');
 Route::any('customer/weiboCallBack','LoginController@weiboCallBack');
});
  Route::get('home/customer','CustomerController@index');
 // Route::post('gee/login',function(){
 //  $captcha = new \Laravist\GeeCaptcha\GeeCaptcha(env('CAPTCHA_ID'),env('PRIVATE_KEY'));
 //       if ($captcha->isFromGTServer() && $captcha->success()) 
 //      {
 //        echo "success";
 //           // 登录的代码逻辑在这里   
 //     }
 // });
 Route::get('getCaptcha',function(){
    $captcha = new \Laravist\GeeCaptcha\GeeCaptcha(env('CAPTCHA_ID'),env('PRIVATE_KEY'));
    echo $captcha->GTServerIsNormal();
 });
 Route::get('test',function(){
  return view('customer.geetest');
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


 // Route::get('home/customer', 'CustomerController@index');
