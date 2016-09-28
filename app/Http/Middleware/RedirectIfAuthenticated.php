<?php
// 该中间件用来判断对应类型的用户是否已经登录，已经登录则跳转到home
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle(request $request, Closure $next, $guard = null)
    {
        // 判断用户是否已经登录
        if (Auth::guard($guard)->check()) {
        //如果已经登录就直接跳转到对应用户登录后的页面 
            return redirect('/home'.$guard);
            // return redirect('/home');
        }
        // echo "rdirectmiddle";
        // dd($request->all());
        return $next($request);
    }
}
