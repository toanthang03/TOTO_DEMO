<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDF extends Model
{
    use HasFactory;
    protected $filltable = [
        'filename',
        'product_id',
    ];
    //Định nghĩa quan hệ với model Product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
