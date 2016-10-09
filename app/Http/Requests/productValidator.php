<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
class productValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 
        // return Auth::check()?true:false;
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
          'proName'=>'required',  
          'proSn'=>'required', 
          'proNum'=>'required', 
          'maketPrice'=>'required',
           'webPrice'=>'required', 
            'proDescripetion'=>'required',
            'proImg'=>'required', 
             'cateId'=>'required', 
             'isShow'=>'required', 
              'isHost'=>'required',
        ];
    }
    public function messages(){
        'proName.required'=>'',  
          'proSn.required'=>'', 
          'proNum.required'=>'', 
          'maketPrice.required'=>'',
           'webPrice.required'=>'', 
            'proDescripetion.required'=>'',
            'proImg.required'=>'', 
             'cateId.required'=>'', 
             'isShow.required'=>'', 
              'isHost.required'=>'',
    }
}
