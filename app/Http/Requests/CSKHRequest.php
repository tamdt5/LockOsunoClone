<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CSKHRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'sdt' => 'required',
        ];
    }

    public function messages(){
        return [
            'sdt.required' => 'Vui lòng nhập số điện thoại',
        ];
    }
}
