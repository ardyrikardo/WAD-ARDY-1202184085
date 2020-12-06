<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    use HasFactory;
    public $timestamps = false;

    public function order()
    {
    	return $this->hasOne('App\Models\Order');
    }
}
