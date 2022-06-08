<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Building extends Model
{
    use HasFactory, LogsActivity;
    protected $fillable = [
        'id',
        'landlord_id',
        'name',
        'code',
        'floor_count',
        'size',
        'makani',
        'permises',
        'condition',    'address',
        'emirate',
        'description',
    ];

    public function landlord()
    {
        return $this->belongsTo(Landlord::class);
    }

    public function contract()
    {
        return $this->hasMany(Contract::class);
    }
    public function unit()
    {
        return $this->hasMany(Unit::class);
    }
}
