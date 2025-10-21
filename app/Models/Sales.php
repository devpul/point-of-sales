<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';
    
    protected $fillable = [
        'invoice_code',
        'user_id',
        'customer_id',
        'outlet_id',
        'total_amount',
        'discount',
        'method',
        'paid_amount',
        'cash_change',
        'status',
        'shift_id',
        'receipt_method',
        'description',
    ];
}
