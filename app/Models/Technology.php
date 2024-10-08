<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;
    protected $filltable = [
        'name',
        'product_id',
    ];
    //Định nghĩa quan hệ với model Product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
