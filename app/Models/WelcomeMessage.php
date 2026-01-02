<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class WelcomeMessage extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasTranslations;

    protected $fillable = [
        'name',
        'title',
        'image',
        'description',
        'is_active',
        'no_urut'
    ];

    public array $translatable = [
        'name',
        'title',
        'image',
        'description',
    ];

    protected $casts = [
        'name' => 'array',
        'title' => 'array',
        'image' => 'array',
        'description' => 'array',
    ];
}
