<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table = 'type';
    protected $fillable = [
        'name',
        'categ_id'
    ];

    public function category()
    {
        return $this->belongsto(Category::class, 'categ_id', 'id'); 
    }
}
