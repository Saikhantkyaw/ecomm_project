<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class,'sub_category_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }

    protected $table='product';
}
