<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSoapTransaction extends FormRequest
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
            'bankCode' => 'required|max:4',
            'bankInterface' => 'required|max:1',
            'reference' => 'required|max:32',
            'description' => 'required',
            'language' => 'required|max:2',
            'currency' => 'required|max:3',
            'totalAmount' => 'required|numeric',
            'taxAmount' => 'required|numeric',
            'devolutionBase' => 'required|numeric',
            'tipAmount' => 'required|numeric',
            'ipAddress' => 'required|max:15',
            'userAgent' => 'required',
        ];
    }
}
