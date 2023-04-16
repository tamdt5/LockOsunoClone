<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'tieude' => 'required',
            'hinhanhbaiviet' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'noidung' => 'required',
            'theloai' => 'required',
        ];
    }

    public function messages(){
        return [
            'tieude.required' => 'Vui lòng nhập tiêu đề bài viết',
            'hinhanhbaiviet.required' => 'Vui lòng chọn hình ảnh',
            'hinhanhbaiviet.image' => 'Vui lòng chọn dạng tệp hình ảnh (jpeg, png, jpg,gif...)',
            'hinhanhbaiviet.mimes' => 'File phải ở định dạng jpeg, png, jpg, gif hoặc svg, vui lòng thử lại',
            'hinhanhbaiviet.max' => 'Kích thước hình ảnh vượt quá 2MB',
            'noidung.required' => 'Vui lòng nhập nội dung bài viết',
            'theloai.required' => 'Vui lòng chọn thể loại',
        ];
    }
}
