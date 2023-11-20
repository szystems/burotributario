<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AudioFormRequest extends FormRequest
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
            'file_audio'=>'mimetypes:audio/mp3,audio/mp4,audio/mpeg,audio/mpeg4,audio/aac,audio/wav',
        ];
    }
}
