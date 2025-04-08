<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name' => 'required',
            'email' => 'required|email:rfc,dns|unique:students',
            'password' => 'required',
            'mobile' => 'required',
            'subject' => 'required',
            // 'image' => 'required|image|mimes:jpg,png,jpeg|max:15360'
        ];
    }
}