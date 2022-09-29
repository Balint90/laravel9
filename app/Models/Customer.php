<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    //one customer can have many invoices (one to many)

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
