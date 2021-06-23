<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'fname'=>'required|between:3,30|regex:/^[a-zA-ZÑñ\s]+$/',
            'email'=>'required|between:10,50|email',
            'country'=>'required|between:3,20',
            'city'=>'required|between:3,20',
            'company'=>'required|between:3,20',
            'phone'=>'required|min:11|numeric',
            'password'=>'required|min:8|regex:/[a-zA-Z0-9\s]/',
            'cpassword'=>'required|min:8|required_with:password|same:password'

        ];
    }

}
