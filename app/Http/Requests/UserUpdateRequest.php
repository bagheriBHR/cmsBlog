<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name'=> 'required',
            'email'=> 'required|email',
            'roles' => 'required',
            'status' => 'required',
            'password'=>'nullable|min:8',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'لطفا نام و نام خانوادگی خود را وارد کنید.',
            'email.required'=>'لطفا نام و نام خانوادگی خود را وارد کنید.',
            'email.email'=>'ایمیل شما نامعتبر می باشد.',
            'roles.required'=>'لطفا نقش خود را انتخاب کنید.',
            'statue.required'=>'لطفا وضعیت خود را انتخاب کنید.',
            'password.min'=>'رمز عبور حداقل 8 کاراکتر می باشد.',
        ];

    }
}
