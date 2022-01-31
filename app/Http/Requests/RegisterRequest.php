<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'sex' => 'required|',
            'dob' => 'required|date',
            'phone' => 'required',
            'address' => 'required|string|max:100',
            'email' => 'required|email',
            'date_of_join' => 'required|date',
            'blood_group' => 'required',

            'guardian_name' => 'required|string',
            'guardian_address' => 'required|string',
            'guardian_number' => 'required|string',

            'education' => 'required|string',
            'aos'  => 'required|string',// area of speacialization
            'id_num' => 'required|string',
            'link_id' => 'required|string',

        ];
    }
}
