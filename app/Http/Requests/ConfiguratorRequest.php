<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfiguratorRequest extends FormRequest
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
    public function rules(){
        return [
            'series'            => 'required',
            'product_type'      => 'required',
            'door_opening_type' => 'required',
            'opening_option'    => 'required',
            'standerd_size'     => 'required',

            'ratting'       => 'required',
            'core_material' => 'required',
            'agency'        => 'required',

            'face_type' => 'required',
            'cut'       => 'required',
            'grade'     => 'required',
            
            'hardware_type' => 'required',
            'sub_category'  => 'required',
            'hinge_height'  => 'required',
        ];
    }
}