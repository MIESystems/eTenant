<?php

namespace App\Models;

use App\Enums\TenantDocumentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class TenantDocument extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'tenant_id',
        'number',
        'expire_at',
        'type_id',
    ];

    protected $casts = [
        'expire_at' => 'date',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
