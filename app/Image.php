<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'name'
    ];

    public function products()
    {
        $this->belongsTo(Product::class);
    }
}
