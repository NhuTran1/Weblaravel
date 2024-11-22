<?php

namespace App\Models;

use App\Http\Controllers\BrandProduct;
use App\Http\Controllers\CategoryProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'product_name', 'product_slug', 'category_id', 'brand_id',
        'product_desc', 
        'product_price',
        'product_image',
        'product_status',
        'product_favorite1',
        'product_price_old',
        'product_favorite2',
        'product_images',
        'product_quantity',
        // 'product_brand',
        // 'product_category'
    ];

    protected $primaryKey = 'product_id';
    protected $table = 'tbl_product';

    public function category() {
        return $this->belongsTo(CategoryProduct::class, 'category_id');
    }

    public function brand() {
        return $this->belongsTo(BrandProduct::class, 'brand_id');
    }
}
