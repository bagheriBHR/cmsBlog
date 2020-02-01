<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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

    public function prepareForValidation()
    {
        if($this->slug){
            $this->merge(['slug'=>make_slug($this->slug)]);
        }
        else{
            $this->merge(['slug'=>make_slug($this->title)]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|min:10',
            'slug' => Rule::unique('categories')->ignore(request()->category),
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'لطفا عنوان مطلب را وارد نمایید.',
            'slug.unique' => 'لطفا نام مستعار دیگری انتخاب کنید.',
        ];

    }

}
