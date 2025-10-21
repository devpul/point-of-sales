<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLogs extends Model
{
    protected $table = 'activity_logs';

    protected $fillable = [
        'user_id',
        'activity_name',
        'activity_time',
    ]; 
}
