<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'quantity', 'transmission', 'fueltype', 'year', 'category_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //Updated slug thêm id
    protected static function booted()
    {
        static::created(function ($product) {
            $product->slug = sprintf("%s-%s", Str::slug($product->name, '-'), $product->id);
            $product->save();
        });
    }
}
