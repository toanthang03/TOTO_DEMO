<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $filltable = [
        'image',
        'product_id',
    ];
    //Định nghĩa quan hệ với model Product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
