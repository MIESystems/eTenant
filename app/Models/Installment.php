<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Installment extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'tenant_id',
        'contract_id',
        'amount',
        'payee_bank_name',
        'status_id',
        'type_id',
        'category_id',
        'document_number',
        'document_date',
        'narration',
    ];

    protected $casts = [
        'document_date' => 'date',
    ];
}
