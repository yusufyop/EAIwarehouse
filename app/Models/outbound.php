<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outbound extends Model
{
    use HasFactory;
    protected $table = "outbounds";
    protected $fillable = ['warehouse_id','vehicle_id','product_id','out_date','address','quantity_out'];
}
