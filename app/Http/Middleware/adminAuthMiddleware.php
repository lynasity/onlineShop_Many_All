<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
class adminAuthMiddleware  extends Authenticate
{
    public  function redirectNow(){
       return redirect()->route('adminLoginForm');
     }
}
