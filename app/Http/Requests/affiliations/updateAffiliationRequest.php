<?php

namespace App\Http\Requests\affiliations;

use Illuminate\Foundation\Http\FormRequest;

class updateAffiliationRequest extends FormRequest
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
            'title'=>'required|unique:affiliations',
            'description'=>'required|unique:affiliations',
            'logo'=>'required|unique:affiliations',
            'sort'=>'required|unique:affiliations'
        ];
    }
}
