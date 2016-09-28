<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Requests\loginRequest;
class checkStateMiddleware
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
        if(!$request->session()->has('login')
            || $request->session()->get('login')!='yes'){
              if( !$request->session()->has('remember') 
                  ||$request->session()->get('remember') != 'success'){
                 return redirect('admin/loginform')->with('fail','请先登录您的账号');
              }else{
                   echo "rememberpass";
                  return $next($request);    
              }
        }else{
                 echo "loginpass";
                 return $next($request);  
    }
   }
}

