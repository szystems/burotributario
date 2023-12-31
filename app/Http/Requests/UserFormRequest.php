<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'name'=>'required|max:100',
            'phone'=>'max:100',
            'address1'=>'max:191',
            'addres2'=>'max:191',
            'city'=>'max:50',
            'state'=>'max:50',
            'country'=>'max:50',
            'zipcode'=>'max:10',
        ];
    }
}
