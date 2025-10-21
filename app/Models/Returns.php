<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Returns extends Model
{
    protected $table = 'returns';

    protected $fillable = [
        'sale_id',
        'reason',
        'total_refund',
        // 'created_at',
        'user_id',
        'outlet_id',
        'status',
    ];
}
