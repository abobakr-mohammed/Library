<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                  'name' =>'required|unique:books,name',
                  'image' => 'required|mimes:jpg,png,bmp,jpeg,gih,eps,tif,tiff,|min:1|max:5000'

        ];
    }

     public function messages()
    {
        return [
                 'name.required' => 'name field is required ' ,
            'name.unique' => 'book name is already exist',
            'image.required' => 'image field is required',
            'image.mimes' => 'this field accept only image format',
            'image.min' => 'image can be minimum size with 0.55 KB',
            'image.max' => 'image can be miximum size with 5 MB'
        ];
    }
}
