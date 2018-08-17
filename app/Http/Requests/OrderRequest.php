<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'street_address' => 'required',
        ];
    }
    public function messages(){
        return[
            'first_name.required' => 'Please, enter your First Name',
            'last_name.required' => 'Please, enter your Last Name',
            'phone.required' => 'Please, enter your Phone',
            'email.required' => 'Please, enter your Email',
            'city.required' => 'Please, enter your City',
            'street_address.required' => 'Please, enter your Street Address',
        ];
    }
}
