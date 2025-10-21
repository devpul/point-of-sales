<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shifts extends Model
{
    protected $table = 'shifts';
    
    protected $fillable = [
        'user_id',
        'outlet_id',
        'start_time',
        'end_time',
        'cash_in',
        'cash_out',
        'cashier_name',
    ];
}
