<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{

    use HasFactory;
/*     protected $fillable = [
       'user_id',
       'invoice_no',
       'payment_type',
       'total',
       'subtotal',
       'cupon_discount',
    ]; */
    
    protected $guarded = [];
}
