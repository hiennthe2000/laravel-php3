<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'slug' => 'required|unique:posts,slug|max:255',
            'contents' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên bài viết.',
            'name.max' => 'Tên bài viết không được vượt quá 255 ký tự.',
            'slug.required' => 'Vui lòng nhập slug bài viết.',
            'slug.unique' => 'Slug đã tồn tại. Vui lòng chọn slug khác.',
            'slug.max' => 'Slug không được vượt quá 255 ký tự.',
            'contents.required' => 'Vui lòng nhập nội dung bài viết.',
            'image.image' => 'Tệp phải là ảnh.',
            'image.mimes' => 'Định dạng ảnh không hợp lệ. Chỉ chấp nhận các định dạng: jpeg, png, jpg, gif.',
            'image.max' => 'Dung lượng ảnh không được vượt quá 2MB.',
            'category_id.required' => 'Vui lòng chọn danh mục bài viết.',
            'category_id.exists' => 'Danh mục bài viết không tồn tại.',
        ];
    }
}
