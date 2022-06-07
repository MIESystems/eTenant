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
}
