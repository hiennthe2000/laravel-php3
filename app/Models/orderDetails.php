<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use  App\Models\Orders;

class orderDetails extends Model
{
    use HasFactory;
    protected $table = 'order_detail';

    protected $fillable = ['product_id', 'order_id', 'qty', 'price','created_at','updated_at'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Orders::class);
    }
}
