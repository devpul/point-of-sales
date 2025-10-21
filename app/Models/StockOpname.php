<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockOpname extends Model
{
    protected $table = 'stock_opname';

    protected $fillable = [
        'opname_date',
        'supplier_id',
        'user_id',
        'quantity',
        'notes',
        'mode',
        'stock_id',
    ];  
}
