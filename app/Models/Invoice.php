<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    //one customer can have many invoices (one to many)

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
