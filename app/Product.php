<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'count', 'desc', 'views', 'rates', 'brand_id', 'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function images()
    {
        return $this->hasMany('App\Image', 'product_id');
    }

    public function solds()
    {
        return $this->hasMany('App\Solds', 'product_id');
    }

    public function views()
    {
        return $this->hasMany('App\View', 'product_id');
    }
}
