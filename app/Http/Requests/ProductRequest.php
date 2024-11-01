<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'slug' => 'required|unique:products,slug|max:255',
            'contents' => 'required',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:product_categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm.',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
            'slug.required' => 'Vui lòng nhập slug sản phẩm.',
            'slug.unique' => 'Slug đã tồn tại. Vui lòng chọn slug khác.',
            'slug.max' => 'Slug không được vượt quá 255 ký tự.',
            'contents.required' => 'Vui lòng nhập nội dung sản phẩm.',
            'price.required' => 'Vui lòng nhập giá sản phẩm.',
            'price.numeric' => 'Giá sản phẩm phải là một số.',
            'price.min' => 'Giá sản phẩm phải lớn hơn hoặc bằng 0.',
            'sale_price.required' => 'Vui lòng nhập giá bán sản phẩm.',
            'sale_price.numeric' => 'Giá bán sản phẩm phải là một số.',
            'sale_price.min' => 'Giá bán sản phẩm phải lớn hơn hoặc bằng 0.',
            'image.image' => 'Tệp phải là ảnh.',
            'image.mimes' => 'Định dạng ảnh không hợp lệ. Chỉ chấp nhận các định dạng: jpeg, png, jpg, gif.',
            'image.max' => 'Dung lượng ảnh không được vượt quá 2MB.',
            'category_id.required' => 'Vui lòng chọn danh mục sản phẩm.',
            'category_id.exists' => 'Danh mục sản phẩm không tồn tại.',
        ];
    }
}
