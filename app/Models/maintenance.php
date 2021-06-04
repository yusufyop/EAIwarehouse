<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maintenance extends Model
{
    use HasFactory;
    protected $fillable = ['maintenance_id', 'warehouse_id', 'product_id', 'inbound_id', 'outbound_id', 'quantity_productEXP', 'date'];
}
