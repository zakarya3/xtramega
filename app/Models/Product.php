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
        'product_brand',
        'image',
        'qty',
        'tax',
        'product_reference',
        'price',
    ];
}
