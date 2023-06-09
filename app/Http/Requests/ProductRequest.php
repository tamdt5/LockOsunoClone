<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'tensanpham' => 'required|unique:product',
            'hinhanhsanpham' => 'required',
            'thongsokythuat' => 'required',
            'noidungsanpham' => 'required',
            'tinhnang' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tensanpham.required' => 'Vui lòng nhập tên sản phẩm',
            'tensanpham.unique' => 'Đã tồn tại sản phẩm này',
            'hinhanhsanpham.required' => 'Vui lòng nhập hình ảnh sản phẩm',
        ];
    }
}
