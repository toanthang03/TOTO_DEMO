<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_News extends Model
{
    use HasFactory;
    protected $table = 'image_news';
    protected $fillable = [ 
        'image',
        'new_id',
    ];
    //Định nghĩa quan hệ với model News
    public function news(){
        return $this->belongsTo(News::class);
    }
}
