<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    protected $table = 'purchases';

    protected $fillable = [
        'supplier_id',
        'user_id',
        'outlet_id',
        'cost_price',
        'total_amount',
    ]; 
}
