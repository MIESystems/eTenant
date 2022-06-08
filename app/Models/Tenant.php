<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Tenant extends Model
{
    use HasFactory, SoftDeletes, LogsActivity;

    protected $fillable = [
        'name',
        'gender_id',
        'type_id',
        'phone',
        'email',
        'nationality',
        'date_of_birth'
    ];

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function installments()
    {
        return $this->hasMany(Installment::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }

    public function documents()
    {
        return $this->hasMany(TenantDocument::class);
    }
}
