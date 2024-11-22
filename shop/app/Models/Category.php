<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps= false;
    protected $fillable = [
        'category_product_keywords',
        'category_name',
        'slug_category_product',
        'category_desc',
        'category_status'
    ];

    protected $primaryKey = 'Category_id';
    protected $table = 'tbl_category_product';

    public function products() {
        //quan he 1-N: 1 brand co the co nhiu product
        return $this->hasMany(Product::class, 'category_id');
    }
}
