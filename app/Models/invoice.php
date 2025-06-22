<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /** @use HasFactory<\Database\Factories\InvoiceFactory> */
    use HasFactory;
      protected $guarded = []; // ✅ allows mass assignment for all fields
      
    public function customer() {
        return $this->belongsTo(Customer::class);
}

}
