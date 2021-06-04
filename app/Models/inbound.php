<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inbound extends Model
{
    use HasFactory;
    protected $fillable = ['inbound_id', 'warehouse_id', 'delivery_id', 'product_id', '	in_date', 'quantity'];
}
