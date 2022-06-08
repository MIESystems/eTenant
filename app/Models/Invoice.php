<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Invoice extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'number',
        'landlord_id',
        'tenant_id',
        'contract_id',
    ];

    public function landlord()
    {
        return $this->belongsTo(Landlord::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }

    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }
}
