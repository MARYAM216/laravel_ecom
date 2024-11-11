<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products_Details extends Model
{
    protected $fillable = [
        'id_products',
        'price',
        'qty',
        'image',
        'color',
    ];
}
