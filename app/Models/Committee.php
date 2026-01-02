<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Committee extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasTranslations;

    protected $fillable = [
        'name',
        'title',
        'category',
        'no_urut',
        'image'
    ];

    public array $translatable = [
        'name',
        'title',
        'category',
        'image'
    ];

    protected $casts = [
        'name' => 'array',
        'title' => 'array',
        'category' => 'array',
        'image' => 'array',
    ];
}
