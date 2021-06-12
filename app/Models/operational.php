<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operational extends Model
{
    use HasFactory;
    protected $table = "operationals";
    protected $fillable = ['maintenance_id','inbound_id','outbound_id','date','expense_id'];
}
