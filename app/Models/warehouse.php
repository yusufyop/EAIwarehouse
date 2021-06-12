<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warehouse extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = "warehouses";
=======
    protected $fillable = ['location','capacity'];
>>>>>>> 90c494ebb4bea7ef725ce5d5e76ef261eb15bb38
}
