<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumers extends Model
{
    protected $fillable = [
        'order_date',
        'costumer_id',
        'products_id',
        'status',

    ];
}
