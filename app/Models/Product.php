<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'googleProductId',
        'gender',
        'category',
        'subCategory',
        'productName',
        'price',
        'color',
        'sizeUk',
        'sizeEu',
        'descriptionTitle',
        'description',
        'specification',
        'thumbnail',
        'allImages'

    ];
}
