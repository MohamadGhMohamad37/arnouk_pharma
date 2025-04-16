<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductArnoukPharma extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'main_image',
        'images',
        'category_arnouk_pharma_id',
    ];

    protected $casts = [
        'images' => 'array', // لتحويل الصور من JSON إلى array تلقائياً
    ];

    // علاقة مع التصنيف (CategoryArnoukPharma)
    public function category()
    {
        return $this->belongsTo(CategoryArnoukPharma::class, 'category_arnouk_pharma_id');
    }
}
