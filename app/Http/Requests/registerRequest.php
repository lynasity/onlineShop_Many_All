<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
               'password'=>'required|alpha_dash|confirmed',
               'password_confirmation'=>'required',
               'email'=>'required|email', 
        ];
    }
    public function messages(){
        return [
           'username.required'=>'用户名为必填项',
           'username.alpha_dash'=>'用户名格式只能包含字母,数字和下划线',
           'username.'
           'password.required'=>'请填写密码',
           'password.alpha_dash'=>'密码中只能包含字母,数字和下划线',
           'password.confirmed'=>'两次输入的密码不一致',
           'password_confirmation.required'=>'请再次输入密码',
           'email.required'=>'请填写邮箱地址',
           'email.email'=>'邮箱格式非法',
        ];  
    }
}
