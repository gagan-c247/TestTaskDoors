<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistrationUpdateRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            /* ========== COMPANY ========== */
            'company_name'                => 'required|string|max:255',
            // 'company_reg_year'            => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'company_reg_year'            => 'required|digits:4|integer|min:1800',
            // 'company_reg_num'             => 'required|alpha_num|max:50',
            // 'company_phone'               => 'required|digits_between:9,15',
            'company_phone'               => 'required',
            // 'company_reg_doc'             => 'mimes:doc,pdf,docx,zip,jpeg,bmp,png,gif,svg,jpg',
            'company_nu_molding_machines' => 'required|numeric',
            'companey_nu_sites'           => 'required|numeric',
            /* ========== ADDRESS ========== */
            'company_address_line_1'  => 'required|string|max:255',
            'company_address_zip'     => 'required|alpha_num',
            'company_address_city'    => 'required|string|max:100',
            'company_address_state'   => 'required|string|max:100',
            'company_address_country' => 'required|string|max:100',
            /* ========== PERSONAL ========== */
            'name'        => 'required|string|max:255',
            // 'email'       => 'required|string|email:rfc,dns|max:255',
            'password'    => 'required|string|min:8|confirmed',
            'first_name'  => 'required|string|max:50',
            'last_name'   => 'required|string|max:50',
            'designation' => 'required|string|max:50',
            // 'phone_nu'    => 'required|digits_between:9,15',
            'phone_nu'    => 'required',
        ];
    }

    public function messages(){
        return [
            /* ========== COMPANY ========== */
            'company_name.required'                => 'Company name field is required.',
            'company_reg_year.required'            => 'Company registration year field is required.',
            'company_reg_year.digits'              => 'Company registration year must be 4 digits.',
            // 'company_reg_num.required'             => 'Company registration number field is required.',
            'company_phone.required'               => 'Company phone number field is required.',
            'company_phone.digits_between'         => 'Please enter a valid phone number.',
            'company_nu_molding_machines.required' => 'Number of company modeling machine field is required.',
            'company_nu_molding_machines.numeric'  => 'Number of company modeling machine must be a number.',
            'companey_nu_sites.required'           => 'Number of company sites field is required.',
            'companey_nu_sites.numeric'            => 'Number of company sites must be a number.',
            /* ========== ADDRESS ========== */
            'company_address_line_1.required'  => 'Company address line 1 field is required.',
            'company_address_zip.required'     => 'Company zip code field is required.',
            'company_address_city.required'    => 'Company city field is required.',
            'company_address_state.required'   => 'Company state field is required.',
            'company_address_country.required' => 'Company country field is required.',
            /* ========== PERSONAL ========== */
            'email.required'             => 'Email field is required.',
            'first_name.required'        => 'First name field is required.',
            'last_name.required'         => 'Last name field is required.',
            'designation.required'       => 'Designation field is required.',
            'phone_nu.required'          => 'Phone number field is required.',
            'phone_nu.digits_between'    => 'Please enter a valid phone number.',
        ];
    }
}
