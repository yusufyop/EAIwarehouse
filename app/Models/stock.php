<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;
    protected $fillable = ['stock_id', 'product_id', 'inbound_id', 'warehouse_id', 'outbound_id', 'quantity_product'];
}
