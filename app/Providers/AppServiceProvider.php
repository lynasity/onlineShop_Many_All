<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// 参数校验服务
use App\admin;
use Illuminate\Support\Facades\Validator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 添加新规则
          Validator::extend('AuthPass', function($attribute, $value, $parameters, $validator) {
            // $users是collecion集合
          $users=admin::where('username','manyhong')->get();
                $realpass=$users[0]->password;   
           return $value==$realpass?true:false;
        });
          // 设置规则返回的错误信息
           Validator::replacer('AuthPass', function($message, $attribute, $rule, $parameters) {
              return '输入密码错误';
          });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
