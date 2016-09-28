<?php

namespace App\Http\Middleware;

use Closure;

class geetestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $captcha = new \Laravist\GeeCaptcha\GeeCaptcha(env('CAPTCHA_ID'),env('PRIVATE_KEY'));
        if($captcha->isFromGTServer() && $captcha->success()){
             return $next($request);
         }else{

         } 
    }
}
