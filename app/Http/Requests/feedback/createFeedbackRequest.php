<?php

namespace App\Http\Requests\feedback;

use Illuminate\Foundation\Http\FormRequest;

class createFeedbackRequest extends FormRequest
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
            // 
            'name'=>'required',
            'qualification'=>'required',
            'message'=>'required',
            'number'=>'required',
            'email'=>'nullable'|'email'
            
        ];
    }
}
