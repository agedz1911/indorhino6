<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class accommodation extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'hotel_name',
        'distance',
        'hotel_star',
        'url',
        'image',
        'price',
        'no_urut',
        'is_active'
    ];
    
    public array $translatable = [
        'hotel_name',
        'distance',
        'hotel_star',
        'url',
        'image',
        'price',
        'no_urut',
        'is_active'
    ];

    protected $casts = [
        'hotel_name' => 'array',
        'distance' => 'array',
        'hotel_star' => 'array',
        'url' => 'array',
        'image' => 'array',
        'price' => 'array',
        'no_urut' => 'array',
        'is_active' => 'array',
    ];
}
