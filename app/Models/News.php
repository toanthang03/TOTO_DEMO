<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
        'date',
    ];
    public function img_new()
    {
        return $this->hasMany(Image_News::class);
    }
}
