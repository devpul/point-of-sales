<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnsItems extends Model
{
    protected $table = 'returns_items';
    
    protected $fillable = [
        'return_id',
        'product_id',
        'unit_price',
        'subtotal',
        'notes',
        'reason',
    ];
}
