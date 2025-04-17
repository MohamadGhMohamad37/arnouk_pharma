<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventArnoukPharma extends Model
{
    protected $fillable = [
        'name_en', 'name_ar', 'description_en', 'description_ar',
        'image', 'gallery_images', 'event_date', 'event_time', 'event_location',
    ];

    protected $casts = [
        'gallery_images' => 'array',
    ];
}
