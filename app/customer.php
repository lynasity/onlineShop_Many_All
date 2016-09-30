<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
// 实现密码重置必须使用实现Illuminate\Contracts\Auth\CanResetPassword接口，Illuminate\Foundation\Auth\User已经为我们实现了
use Illuminate\Notifications\Notifiable;
class customer extends Authenticatable
{
	 use Notifiable;
	 protected $table='customers';
     protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
