<?php

namespace App\Http\Requests\announcements;

use Illuminate\Foundation\Http\FormRequest;

class createAnnouncementsRequest extends FormRequest
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
            'title'=>'required|unique:announcements',
            'description'=>'required',
            'image'=>'required',
            'announcedate'=>'nullable',
            'sort'=>'required'

        ];
    }
}
