<?php
namespace App\Http\Controllers\Customer\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

/**
 * Class authController
 * @package App\Http\Controllers\Customer\Auth
 * @使用集成包实现微博登录
 */
class authController extends Controller
{
    public function redirectToProvider(Request $request,$service)
    {
        return Socialite::driver($service)->redirect();
    }

    public function handleProviderCallback(Request $request,$service)
    {
        $user = Socialite::driver($service)->user();
        dd($user);
    }
}
