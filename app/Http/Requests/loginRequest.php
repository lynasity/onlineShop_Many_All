<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'username'=>'required|alpha_dash|exists:admins,username',
             'password'=>'required|alpha_dash|AuthPass',    
        ];
    }
    public function messages(){
        return [
         'username.required'=>'用户名不能为空',
         'username.required'=>'用户名格式错误',
         'username.exists'=>'该用户不存在',
         'password.required'=>'密码不能为空',
         'password.alpha_dash'=>'输入密码格式错误',
        ];

    }
}
