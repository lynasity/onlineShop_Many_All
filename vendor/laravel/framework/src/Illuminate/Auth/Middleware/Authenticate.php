<?php

namespace Illuminate\Auth\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Factory as Auth;
abstract class Authenticate
{
    /**
     * The authentication factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;
    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if(!$this->authenticate($guards)){
            return $this->redirectNow();
        }
        return $next($request);
    }

    /**
     * Determine if the user is logged in to any of the given guards.
     *
     * @param  array  $guards
     * @return void
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    protected function authenticate(array $guards)
    {
        // 如果为空调用默认的guard
        if (empty($guards)) {
            //$this->auth返回AuthManager对象,通过__call方法实际上也是调用guard的authenticate
            return $this->auth->authenticate();
        }
        foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) { 
                // Set the default guard driver the factory should serve.
                $this->auth->shouldUse($guard);
                return true;
            }
        }     
        // 未登录则返回false
          return false; 
         // return $this->redirect();
        // 下面语句会无故跳转到/login目录下，已经做了某些绑定？？
        // throw new AuthenticationException;
    }
     protected abstract function redirectNow();
}
