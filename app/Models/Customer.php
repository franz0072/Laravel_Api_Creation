<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // ✅ Add this property to allow mass assignment of the specified fields
    protected $fillable = [
        'name',
        'type',
        'email',
        'address',
        'city',
        'state',
        'postal_code',  // Make sure this matches your DB column name
    ];

    // ✅ Define the relationship with invoices
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
