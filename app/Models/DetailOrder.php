<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;

    protected $table = 'order_detail';

    protected $fillable = [
        'order_id', 'product_id', 'qty','price', 'created_at', 'updated_at'
    ];
}

