<?php

namespace App\Http\Controllers\Customer\Auth;

use App\customer;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

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
        $this->middleware('guest');
    }
// 自定义验证规则
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'username' => 'required|max:255',
            // 'email' => 'required|email|max:255|unique:users',
            // 'password' => 'required|min:6|confirmed',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation'=>'required',
            // 'captcha'=>'required|captcha',
            // 'gender'=>'required|alpha|in:male,female,secret',
            // 'face'='require',
        ]);
    }
    // 自定义返回注册页面
    public function showRegistrationForm(){
         return view('customer.register');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $datas
     * @return User
     */
    // 自定义数据库存储
    protected function create(array $data)
    {
        return customer::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            // face,gender暂时测试
            // 'face'=> 'face',
            // 'gender'=> 'male',
        ]);
    }
    protected function guard()
    {
        return Auth::guard('customer');
    }
    
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
        echo '{"status":"success"}';
    }
}
