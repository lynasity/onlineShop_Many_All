<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */
   // 配置认证守护
    'guards' => [
        'web' => [
            // driver,设置保存登录用户信息的方式
            'driver' => 'session',
            // provider,设置提供用户信息的表名
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
        'admin'=>[
             'driver'=>'session',
             'provider'=>'admins',
        ],
        'customer'=>[
              'driver'=>'session',
              'provider'=>'customers',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */
// 设置数据提供者的信息
    'providers' => [
        'users' => [
            // 实际获取表数据的方式,这里使用eloquent来获取数据，则需要提供所使用的模型类
            'driver' => 'eloquent',
            // 使用的模型
            'model' => App\User::class,
        ],
        'customers'=>[
             'driver'=>'eloquent',
             'model'=>App\customer::class,
        ],
        'admins'=>[
              'driver'=>'eloquent',
              'model'=>App\admin::class,
        ],
        // 'users' => [
        // 如果直接通过数据库来获取数据
        //     'driver' => 'database',
        //  则需要提供所使用的表名
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | Here you may set the options for resetting passwords including the view
    | that is your password reset e-mail. You may also set the name of the
    | table that maintains all of the reset tokens for your application.
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */
// 为对应的数据提供者设置重置密码功能的一些参数
    'passwords' => [
    // 键是provider
        'users' => [
           // 数据表名
            'provider' => 'users',
           //存放重置密码时用到的token
            'table' => 'password_resets',
            // 设置token的有限期
            'expire' => 60,
        ],
        'cutomers' => [
            'provider' => 'cutomers',
            'table' => 'customer_password_resets',
            'expire' => 60,
        ],
        'admins' => [
           // 数据表名
            'provider' => 'admins',
           //存放重置密码时用到的token
            'table' => 'admin_password_resets',
            // 设置token的有限期
            'expire' => 60,
        ],
    ],

];
