<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'contents' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục.',
            'name.max' => 'Tên danh mục không được vượt quá 255 ký tự.',
            'contents.required' => 'Vui lòng nhập nội dung danh mục.',
            'image.image' => 'Tệp phải là ảnh.',
            'image.mimes' => 'Định dạng ảnh không hợp lệ. Chỉ chấp nhận các định dạng: jpeg, png, jpg, gif.',
            'image.max' => 'Dung lượng ảnh không được vượt quá 2MB.',
        ];
    }
}
