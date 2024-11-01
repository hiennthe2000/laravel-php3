<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderDetails;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id','name', 'slug', 'contents', 'price', 'sale_price', 'image', 'category_id', 'created_at', 'updated_at'
    ];

    public function getDetailProduct($id)
    {
        return $this->where('id', $id)->get();
    }

    // Phương thức để lấy danh sách chi tiết loại sản phẩm dựa trên category_id
    public function getDetailCategoryProduct($id)
    {
        return $this->where('category_id', $id)->get();
    }

    public function orderDetails()
    {
        return $this->hasMany(orderDetails::class);
    }
}
