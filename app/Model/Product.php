<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'warranty', 'price', 'chongnuoc', 'chatlieukinh', 'chatlieuday', 'chatlieuvo', 
        'image', 'image_detail', 'id_category', 'id_brand', 'description', 'status'
    ];

    protected $table = 'product';

    protected $attributes = [
        'status' => true
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand', 'id');
    }

    public function colors()
    {
        return $this->hasMany(ProductColor::class, 'id_product', 'id');
    }

    public function displayStatus()
    {
        return $this->status ? 'Hiển thị' : 'Ẩn';
    }
}
