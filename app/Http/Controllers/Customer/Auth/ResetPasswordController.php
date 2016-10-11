<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
  
    use ResetsPasswords;
    protected $redirectTo = '/home/customer';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
     protected function guard()
    {
        return Auth::guard('customer');
    }
    protected function broker()
    {
        return Password::broker('customers');
    }
//   该控制器方法从路由中获取token，然后传给重置密码的表单，增加到一个隐藏域中，将会被顺带提交
    public function showResetForm(Request $request, $token = null)
    {
        return view('customer.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
