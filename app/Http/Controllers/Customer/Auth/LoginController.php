<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use app\libraries\weibo\SaeTOAuthV2;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
//   已经包含了登录限流trait
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home/customer';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // admin将作为guard参数传递给guest中间件
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function guard()
   {
//  返回Illuminate\Auth\SessionGuard对象
      return Auth::guard('customer');
   }

   public function showLoginForm(){
    
    return view('customer.login');
   }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/home/customer');
    }
    public function weibo(request $request){
         if(session()->get('weibo_access_token')){        
               return view('customer.index');
        }      
        $weibo=new SaeTOAuthV2(env('WEIBO_KEY'),env('WEIBO_SECRET'));
        $callback=route('weiboCallBack');
        $oauth=$weibo->getAuthorizeURL($callback);
        return redirect::to($oauth,301);
    }
      public function weiboCallBack(request $request){
           $key['code']=$request->input('code');
           $key['redirect_uri']=route('weiboCallBack');
          $weibo=new SaeTOAuthV2(env('WEIBO_KEY'),env('WEIBO_SECRET'));
          // 第一次获取accessToken
           $oauth=$weibo->getAccessToken($key);
           $request->session()->put('weibo_access_token',$oauth['access_token']);
           if(session()->get('weibo_access_token')){
                // echo session()->get('weibo_access_token');
               return view('customer.index');
           }      
     }
    public function username()
    {
        return 'username';
    }
}
