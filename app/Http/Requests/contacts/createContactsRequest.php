<?php

namespace App\Http\Requests\contacts;

use Illuminate\Foundation\Http\FormRequest;

class createContactsRequest extends FormRequest
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

            'campus'=>'required|unique:contacts',
            'map'=>'required|unique:contacts',
            'address'=>'required|unique:contacts',
            'number'=>'required|unique:contacts',
            'email'=>'required|email',
            'sort'=>'required|unique:contacts'
        ];
    }
}
