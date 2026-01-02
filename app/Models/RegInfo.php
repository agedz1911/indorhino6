<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class RegInfo extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'is_active'
    ];

    public array $translatable = [
        'title',
        'slug',
        'description',
        'is_active'
    ];

    protected $casts = [
        'title' => 'array',
        'slug' => 'array',
        'description' => 'array',
        'is_active' => 'array'
    ];

}
