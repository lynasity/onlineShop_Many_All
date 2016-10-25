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
//    所有url的根目录均为域名
//    控制器文件目录：如果没放在Route::group里面，则对应目录为app/Http/Controllers(控制器根目录)
//                 如果是放在group里面，比如管理员认证模块的返回登录界面，此时位于Admin\Auth命名空间下
//                 路径就是: 控制器根目录/Admin/Auth
// -------------------------------------------------------------------------------
//管理员认证模块
  Route::group(['namespace'=>'Admin\Auth'],function (){
  //返回登陆界面
	Route::get('admin/login','LoginController@showLoginForm')->name('adminLoginForm');
  // 提交登陆界面表单
	Route::post('admin/login','LoginController@login');
  // 提交退出登陆请求
    Route::get('admin/logout','LoginController@logout');
  //返回注册界面
    Route::get('admin/register', 'RegisterController@showRegistrationForm');
    // 提交注册请求
Route::post('admin/register', 'RegisterController@register')->name('adminRegister');
});
// -----------------------------------------------------------------------------
// 管理后台模块
Route::group(['namespace'=>'Admin'],function () {
    // 返回后台首页
    Route::get('home/admin','AdminController@index')->name('adminHome');
    // -----------------------------------------------------------------
    //功能子模块分流
    //返回产品管理中心首页
    Route::get('admin/productManagerCenter','ManagerController@productManagerCenter')->name('productsCenter');
    // 返回消息管理中心首页
    Route::get('admin/messageManagerCenter','ManagerController@messageManagerCenter')->name('messageCenter');
    // 返回品类管理中心首页
    Route::get('admin/cateManagerCenter','ManagerController@cateCenter')->name('cateCenter');
    // 返回订单管理中心首页
     Route::get('admin/orderFormManagerCenter','ManagerController@orderFormCenter')->name('orderFormCenter');
    //-------------------------------------------------------------------------------------------------
    //消息管理
    //返回编辑消息界面
    Route::get('admin/messageForm','messageController@messageForm')->name('messageForm');
    // 提交发送消息请求
    Route::post('admin/sendNotification','messageController@sendNotification')->name('sendNotification');
    // -------------------------------------------------------------------------------------------------
    // 产品管理(资源路由)
    //提交新建产品请求
    Route::post('products','productController@store')->name('product.store');
    // 返回所有产品展示页面
    Route::get('products/content/{content}','productController@show')->name('product.show');
    // 返回特定产品详情，url中加上{}的表示此处是参数
    Route::get('products/detail/{id}','productController@detail')->name('product.detail');
    // 提交删除产品请求
    Route::get('products/{product}/delete','productController@destroy')->name('product.delete');
    Route::resource('products', 'productController',['except'=>['destroy','store','show']]);
    // -----------------------------------------------------------------------------------------------
    //品类管理(资源路由)
    //删除品类
     Route::get('cate/{cate}/delete','cateController@destroy')->name('cate.delete');
     Route::resource('cates', 'cateController',['except'=>['destroy']]);
    //  ---------------------------------------------------------------------------------------------
    // 订单管理
    // 返回点击结算后的订单页面
     Route::get('order','orderFormController@index')->name('order.index');
});
// ----------------------------------------------------------------------------------------------------
// 用户认证模块
Route::group(['namespace'=>'Customer\Auth'],function(){
  // 返回用户登陆界面
 Route::get('login', 'LoginController@showLoginForm')->name('customerLoginForm');
 // 提交用户登陆请求
 Route::post('customer/login', 'LoginController@login');
 // 提交用户退出登陆请求
 Route::get('customer/logout', 'LoginController@logout');
 // 返回注册页面
 Route::get('customer/registerForm', 'RegisterController@showRegistrationForm');
 // 提交注册请求
 Route::any('customer/register', 'RegisterController@register')->middleware('geetest');
 // 微博登陆相关路由
 // 提交微博登陆请求，返回微博官方登陆页面
 Route::any('customer/weibo','LoginController@weibo');
 // 微博官方api回调地址
 Route::any('customer/weiboCallBack','LoginController@weiboCallBack')->name('weiboCallBack');
 // 请求找回密码的表单
 Route::get('customer/emailForm','ForgotPasswordController@showLinkRequestForm');
 // 请求发送邮件
 Route::post('customer/sendEmail','ForgotPasswordController@sendResetLinkEmail');
 // 返回密码重置界面
 Route::get('customer/password/reset/{token?}','ResetPasswordController@showResetForm');
 // 提交重置密码请求
 Route::post('customer/password/reset','ResetPasswordController@reset');
 // 下面两个路由暂时没用到
 Route::any('auth/{service}', 'authController@redirectToProvider');
 Route::any('auth/{service}/callback', 'authController@handleProviderCallback');
});
// -----------------------------------------------------------------------------------------------
// shop是购物相关模块，customer是用户功能模块,info是消息中心,search是搜索服务
Route::group(['namespace'=>'Customer'],function (){
  // 返回网站用户首页
    Route::get('home/customer','CustomerController@index')->name('customerHome');
//-------------------------------------------------------------------------------------------------
// 购物模块
Route::get('customer/indexShopCart','shopController@indexShopCart');
// 加入购物车
    Route::get('customer/addToShopCart/{id}','shopController@addToShopCart');
// 返回购物车页面
    Route::get('customer/shopCart','shopController@showShopCart');
//显示结算页面
    Route::get('customer/checkOut','shopController@checkOut');
//减少购物车中产品数量，每请求一次减1
    Route::get('customer/cutFromShopCart/{id}','shopController@cutFromShopCart');
// 提交移除购物车中相关条目的请求
    Route::get('customer/removeFromShopCart/{id}','shopController@removeFromShopCart');
// ---------------------------------------------------------------------------------------------
// 用户个人中心模块
    Route::get('customer/center','CustomerController@customerCenter')->name('customerCenter');
    // 跳转到个人消息中心
    Route::get('customer/infoCenter','CustomerController@infoCenter')->name('infoCenter');
    // 高级用户专属通道
    Route::get('customer/HighLevel','CustomerController@forHighLevel')->name('HighLevel');
    // 展示所有消息
    Route::get('customer/allInfo/{customer?}','infoController@allInfo')->name('allInfo');
    // 查看未读信息
    Route::get('customer/unreadInfo/{customer?}','infoController@unreadInfo')->name('unreadInfo');
    // 删除所有消息
    Route::get('customer/deleteInfo/{customer?}','infoController@deleteInfo')->name('deleteInfo');
    // 搜索请求链接,参数arg为搜索内容
    Route::post('customer/search/{args?}','searchController@search')->name('customer.search');
});
// geeTest验证码资源请求路由
 Route::get('getCaptcha',function(){
    $captcha = new \Laravist\GeeCaptcha\GeeCaptcha(env('CAPTCHA_ID'),env('PRIVATE_KEY'));
    echo $captcha->GTServerIsNormal();
 });

 // 设置只有认证过的用户才能进到的路由
// Route::get('profile', ['middleware' => 'auth', function() {
    // 只有认证过的用户能进来这里...
// }]);
