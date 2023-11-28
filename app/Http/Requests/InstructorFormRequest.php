<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorFormRequest extends FormRequest
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
            'name'=>'required',
            'description'=>'nullable',
            'twitter'=>'nullable|url:twitter,x',
            'facebook'=>'nullable|url:facebook',
            'instagram'=>'nullable|url:instagram',
            'linkedin'=>'nullable|url:linkedin',
            'image'=>'mimes:jpg,jpeg,bmp,png|max:3000'
        ];
    }
}
