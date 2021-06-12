<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbound extends Model
{
    use HasFactory;
    protected $table = "inbounds";
    protected $fillable = ['warehouse_id','delivery_id','in_date','quantity_in'];


}
