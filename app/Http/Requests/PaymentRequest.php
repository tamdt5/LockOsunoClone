<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'hoten' => 'required',
            'sdt' => 'required',
            'email' => 'required|email'
        ];
    }

    public function messages(){
        return [
            'hoten.required' => 'Vui lòng nhập họ và tên người đặt hàng',
            'sdt.required' => 'Vui lòng nhập số điện thoại',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không đúng định dạng, vui lòng nhập lại'
        ];
    }
}
