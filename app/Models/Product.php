<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'cate_id',
        'product_name',
        'product_fullname',
        'product_description',
        'brand_id',
        'image',
        'qty',
        'tax',
        'trending',
        'status',
        'product_reference',
        'price',
    ];

    public function type()
    {
        return $this->belongsto(Type::class, 'cate_id', 'id');
    }
    public function brand()
    {
        return $this->belongsto(Brand::class, 'brand_id', 'id');
    }
}
