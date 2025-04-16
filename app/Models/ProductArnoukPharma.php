<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductArnoukPharma extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en', 'name_ar', 'description_en', 'description_ar', 'main_image', 'images'
    ];
    
    protected $casts = [
        'images' => 'array', // حتى يتم التعامل مع الصور كمصفوفة
    ];
    
}
