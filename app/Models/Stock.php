<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock';

    protected $fillable = [
        'name',
        'unit',
        'warehouse_id',
        'created_at',
        'updated_at',
        'current_stock',
    ];
}
