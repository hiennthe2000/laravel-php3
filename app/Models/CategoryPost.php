<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name', 'summary', 'image', 'created_at', 'updated_at',
    ];
}
