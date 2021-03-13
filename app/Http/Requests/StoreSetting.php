<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSetting extends FormRequest
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
            'company_name_ar' => 'required|max:150',
            'company_name_en' => 'required|max:150',
            'company_address_ar' => 'required',
            'company_address_en' => 'required',
            'phone' => 'numeric',
            'email' => 'required|string|email',
            'about_us_ar' => 'required',
            'about_us_en' => 'required',
            'facebook' => 'required|active_url',
            'twitter' => 'required|active_url',
            'linked_in' => 'required|active_url',
        ];
    }
}
