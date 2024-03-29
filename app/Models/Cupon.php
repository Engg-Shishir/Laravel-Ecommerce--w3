<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'cupon_name',
        'discount',
        'status',
    ];
}
