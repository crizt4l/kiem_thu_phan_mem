<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;

    protected $fillable = [
        'Code',
        'AccountId',
        'IssuedDate',
        'ShippingAddress',
        'ShippingPhone',
        'Total'
    ];
}
