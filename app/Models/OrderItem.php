<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = ['quantity', 'totalprice','product_id', 'order_id'];

    public function order()
    {
        return $this->belongsTo(Oder::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
