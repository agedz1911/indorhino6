<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Visiting extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'category_visit',
        'title_visit',
        'image',
        'description',
        'is_active'
    ];

    public array $translatable = [
        'category_visit',
        'title_visit',
        'image',
        'description',
        'is_active'
    ];

    public $casts = [
        'category_visit' => 'array',
        'title_visit' => 'array',
        'image' => 'array',
        'description' => 'array',
        'is_active' => 'array'
    ];
}
