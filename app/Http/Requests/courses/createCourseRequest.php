<?php

namespace App\Http\Requests\courses;

use Illuminate\Foundation\Http\FormRequest;

class createCourseRequest extends FormRequest
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
            'title'=>'required|unique:courses',
            'titleimage'=>'required',
            'description'=>'required',
            'leads'=>'nullable',
            'duration'=>'required',
            'category'=>'required',
            'contents'=>'required',
            'outcomes'=>'required',
            'sort'=>'required|unique:courses'
        ];
    }
}
