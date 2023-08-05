<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'cat_id',
        'prod_name',
        'prod_small_description',
        'prod_long_description',
        'original_price',
        'selling_price',
        'prod_image',
        'prod_qty',
        'prod_tax',
        'prod_status',
        'prod_trending',
        'prod_meta_title',
        'prod_meta_keywords',
        'prod_meta_description',
    ];
}
