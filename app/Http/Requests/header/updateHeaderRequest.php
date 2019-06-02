<?php

namespace App\Http\Requests\header;

use Illuminate\Foundation\Http\FormRequest;

class updateHeaderRequest extends FormRequest
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
        
            //validating the fields.
            'title'=>'required|unique:headers',
            'slogan'=>'required|unique:headers',
            'logo'=>'required|unique:headers'
      
        ];
    }
}
