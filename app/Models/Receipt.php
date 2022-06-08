<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Receipt extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'invoice_id',
        'landlord_id',
        'tenant_id',
        'contract_id',
        'number',
        'narration',
    ];

    public function landlord()
    {
        return $this->belongsTo(Landlord::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
}
