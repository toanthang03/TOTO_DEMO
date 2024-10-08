<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'productname',
        'price',
        'image',
        'description',
        'category_id',
        'brand_id',
    ];

    //Định nghĩa quan hệ với model Brand
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    //Định nghĩa quan hệ với model Category
    public function category(){
        return $this->belongsTo(Category::class);
    }
    //Quan hệ với model Technique
    public function specifications()
    {
        return $this->hasMany(Technique::class, 'product_id');
    }
    //Quan hệ với model Fetures
    public function fetures()
    {
        return $this->hasMany(Fetures::class, 'product_id');
    }
    //Quan hệ với model Accessory
    public function accessory()
    {
        return $this->hasMany(Accessory::class, 'product_id');
    }
    //Quan hệ với model Image
    public function image()
    {
        return $this->hasMany(Image::class, 'product_id');
    }
}
