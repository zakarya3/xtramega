<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'total_price',
        'email',
        'phone',
        'address',
        'status',
        'tracking_no',
    ];
    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
