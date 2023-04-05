<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'tentheloai' => request()->route('id')
            ? 'required|unique:category,'.request()->route('id')
            : 'required|unique:category',
            'hidden' => 'required'
        ];
    }

    public function messages(){
        return [
            'tentheloai.required' => 'Vui lòng nhập tên thể loại',
            'tentheloai.unique' => 'Thể loại đã tồn tại',
            'hidden.required' => 'Vui lòng nhập trạng thái ẩn/hiện của thể loại'
        ];
    }
}
