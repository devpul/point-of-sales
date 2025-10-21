<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarehouseTransfers extends Model
{
    protected $table = 'warehouse';

    protected $fillable = [
        'warehouse_id',
        'outlet_id',
        'stock_id',
        'user_id',
        'transfer_date',
    ];
}
