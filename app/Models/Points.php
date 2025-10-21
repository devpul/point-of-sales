<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    protected $table = 'points';

    protected $fillable = [
        'customer_id',
        'sale_id',
        'point',
        'type',
        'description',
        // 'created_at',
    ]; 
}
