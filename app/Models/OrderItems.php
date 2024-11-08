<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// OrderItems Model
class OrderItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 
        'product_id', 
        'quantity', 
        'price'
    ];
    // Quan hệ nhiều một với Order 
    public function order()
    { 
        return $this->belongsTo(Orders::class, 'order_id');
    }
    // Quan hệ nhiều một với Product 
    public function product() 
    {
        return $this->belongsTo(Product::class);
    }
}