<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    use HasFactory;
    protected $fillable = [
        'size',
        'color',
        'material',
        'weight',
        'capacity',
        'product_id',
    ];
    //Định nghĩa quan hệ với model Product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
