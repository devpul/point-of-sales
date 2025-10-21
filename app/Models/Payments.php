<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'sale_id',
        'method',
        'amount',
        'receipt_method',
    ]; 
}
