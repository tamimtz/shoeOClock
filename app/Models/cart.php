<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cart extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'productName','size', 'price', 'quantity'];

    public function products(){

        return $this->belongsTo(Product::class);
    }
}
