<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsArnoukPharma extends Model
{
    protected $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'main_image',
        'images',
        'video',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
