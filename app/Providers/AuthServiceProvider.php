<?php

namespace App\Providers;

use App\product;
use App\Policies\productPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        // 注册,模型和权限政策对应
        product::class=>productPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // 定义只有级别为E的用户才能登陆
        // 这里回调函数的$user是自动注入的实例
         Gate::define('userLevel', function ($user,$range){      
          return in_array($user->level,(array) $range);
       });
    }
}
