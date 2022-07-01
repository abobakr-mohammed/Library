<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
                  'discription' => 'required',
                  'category' => 'required',
                  'upload_file' => 'required|mimes:pdf,xlx,csv|min:2048|max:5000',
                  'image' => 'required|mimes:jpg,png,bmp,jpeg,gih,eps,tif,tiff,|min:1|max:5000',

        ];
    }

     public function message()
    {
        return [
            'name.required' => 'name field is required ' ,
            'name.unique' => 'book name is already exist',
            'discription.required' => 'Discription field is reqired',
            'category.required' => 'Category field is required',
            'upload_file.required' => 'file field is required',
            'upload_file.mimes' => 'file can be only a pdf',
            'upload_file.min' => 'file can be minimum size with 2 KB',
            'upload_file.max' => 'file can be miximum size with 5 MB',
            'image.required' => 'image field is required',
            'image.mimes' => 'this field accept only image format',
            'image.min' => 'image can be minimum size with 0.55 KB',
            'image.max' => 'image can be miximum size with 5 MB'
        ];
    }
}
