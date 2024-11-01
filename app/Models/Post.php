<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'name', 'slug', 'contents', 'image', 'category_id', 'created_at', 'updated_at',
    ];

    // Định nghĩa mối quan hệ với bảng categories
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Phương thức để lấy chi tiết tin dựa trên id
    public function getDetailNews($id)
    {
        return $this->where('id', $id)->get();
    }

    // Phương thức để lấy danh sách chi tiết loại tin dựa trên category_id
    public function getDetailType($id)
    {
        return $this->where('category_id', $id)->get();
    }
}
