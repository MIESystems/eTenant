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
        'status_id',
    ];

    protected $casts = [
        'start' => 'date',
        'end' => 'date',
        'grace_start' => 'date',
        'grace_end' => 'date',
    ];

    public function landlord()
    {
        return $this->belongsTo(Landlord::class);
    }

    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function installments()
    {
        return $this->hasMany(Installment::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }

    public function units()
    {
        return $this->belongsToMany(Unit::class);
    }
}
