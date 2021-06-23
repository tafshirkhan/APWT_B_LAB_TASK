<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'pname'=>'required|between:5,30|regex:/^[a-zA-ZÑñ\s]+$/',
            'ptype'=>'required|between:5,30|regex:/^[a-zA-ZÑñ\s]+$/',
            'pquantity'=>'required',
            'pprice'=>'required|integer|gt:0'
        ];
    }
}
