<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryArnoukPharma extends Model
{
    use HasFactory;
    protected $table = 'category_arnouk_pharma';

    protected $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'image',
        'gallery_images'
    ];

    protected $casts = [
        'gallery_images' => 'array', // لتحويل JSON إلى مصفوفة
    ];
}
