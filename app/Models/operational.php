<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operational extends Model
{
    use HasFactory;
    protected $fillable = ['operational_id', 'maintenance_id', 'inbound_id', 'outbound_id', 'expense_id'];
}
