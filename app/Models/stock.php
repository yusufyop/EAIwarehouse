<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = "stocks";
=======
    protected $fillable = ['product_id','warehouse_id','quantity_product'];
>>>>>>> 90c494ebb4bea7ef725ce5d5e76ef261eb15bb38
}
