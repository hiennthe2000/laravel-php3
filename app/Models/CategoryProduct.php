<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{

    protected $table = 'product_categories';

    protected $fillable = [
        'name', 'contents', 'image', 'created_at', 'updated_at'
    ];
}
