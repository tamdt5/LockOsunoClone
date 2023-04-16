<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            'comment' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hoten' => 'required',
            'email' => 'required|email',
        ];
    }

    public function messages(){
        return [
            'comment.required' => 'Vui lòng nhập nội dung bình luận',
            'image.required' => 'Vui lòng chọn hình ảnh',
            'image.image' => 'Vui lòng chọn dạng tệp hình ảnh (jpeg, png, jpg,gif...)',
            'image.mimes' => 'File phải ở định dạng jpeg, png, jpg, gif hoặc svg, vui lòng thử lại',
            'image.max' => 'Kích thước hình ảnh vượt quá 2MB',
            'hoten.required' => 'Vui lòng nhập họ tên người đăng bình luận',
            'email.required' => 'Vui lòng nhập email bình luận',
            'email.email' => 'Vui lòng nhập đúng định dạng email ( ví dụ @gmail.com )',
        ];
    }
}
