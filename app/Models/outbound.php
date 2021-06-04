<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outbound extends Model
{
    use HasFactory;
    protected $fillable = ['outboud_id ', 'warehouse_id', 'product_id', 'vehicle_id', 'out_date', 'address', 'quantity_out'];
}
