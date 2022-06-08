<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'name',
        'title',
        'email',
        'phone',
        'tax_registration_nubmer',
        'bank_name',
        'bank_account_number',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function building()
    {
        return $this->hasMany(Building::class);
    }
    public function contract()
    {
        return $this->hasMany(Contract::class);
    }
    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
    public function receipt()
    {
        return $this->hasMany(Receipt::class);
    }
}
