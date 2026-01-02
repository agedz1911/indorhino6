<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class tour extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'category',
        'url',
        'image',
        'description',
        'is_active'
    ];

    public array $translatable = [
        'title',
        'category',
        'url',
        'image',
        'description',
        'is_active'
    ];

    protected $casts = [
        'title' => 'array',
        'category' => 'array',
        'url' => 'array',
        'image' => 'array',
        'description' => 'array',
        'is_active' => 'array'
    ];
}
