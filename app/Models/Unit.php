<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Unit extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'building_id',
        'type_id',
        'name',
        'code',
        'size',
        'permises',
        'condition',
        'description',
    ];

    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    public function contract()
    {
        return $this->belongsToMany(Contract::class);
    }
}
