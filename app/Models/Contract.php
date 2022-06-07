<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Contract extends Model
{
    use HasFactory, LogsActivity;
    protected $fillable = [
        'id',
        'landlord_id',
        'building_id',
        'tenant_id',
        'number',
        'start',
        'end',
        'grace_start',
        'grace_end',
        'annual_value',
        'discount',
        'value',
        'type_id',
        'remarks',
    ];

    protected $casts = [
        'start' => 'date',
        'end' => 'date',
        'grace_start' => 'date',
        'grace_end' => 'date',
    ];
}
