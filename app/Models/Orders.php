<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderDetails;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'customer_name', 'customer_phone', 'customer_email','shipping_address','note' ,'created_at', 'updated_at',
    ];


    public function orderDetails()
    {
        return $this->hasMany(orderDetails::class);
    }
}
