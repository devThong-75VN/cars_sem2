<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = ['totalprice','product_id','user_id'];

    public function order()
    {
        return $this->belongsTo(Oder::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
