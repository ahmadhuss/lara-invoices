<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoiceRequest extends FormRequest
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
        // state, postcode, phone, email is not required
        return [
            'customer.name' => 'required',
            'customer.address' => 'required',
            'customer.country' => 'required',
            'customer.city' => 'required',
        ];
    }
}