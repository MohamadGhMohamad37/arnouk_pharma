<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogArnoukPharma extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en', 'title_ar', 'post_en', 'post_de', 'image', 'video'
    ];
}
