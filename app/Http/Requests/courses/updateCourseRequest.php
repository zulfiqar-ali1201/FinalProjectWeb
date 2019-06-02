<?php

namespace App\Http\Requests\courses;

use Illuminate\Foundation\Http\FormRequest;

class updateCourseRequest extends FormRequest
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
            //validating the fields.
            'title'=>'nullable',
            'titleimage'=>'nullable',
            'description'=>'nullable',
            'leads'=>'nullable',
            'duration'=>'nullable',
            'category'=>'nullable',
            'contents'=>'nullable',
            'outcomes'=>'nullable',
            'sort'=>'required|unique:courses'
        ];
    }
}
