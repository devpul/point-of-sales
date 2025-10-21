<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vouchers extends Model
{
    protected $table = 'vouchers';

    protected $fillable = [
        'code',  
        'type',  
        'amount',  
        'min_purchases',  
        'max_discount',  
        'start_date',  
        'end_date',  
        'usage_limit',  
        'used_count',  
        'is_active',  
        'descripition',  
    ];
}
