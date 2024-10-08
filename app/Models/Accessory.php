<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'product_id'
    ];
    //Định nghĩa quan hệ với model Product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
