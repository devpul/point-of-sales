<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = 'warehouse';

    protected $fillable = [
        'name',
        'code',
        'address',
        'city',
        'province',
        'contact_person',
        'phone',
        'email',
        'notes',
    ];
}
