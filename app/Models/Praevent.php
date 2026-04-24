<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Praevent extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'description',
        'image',
        'no_urut',
        'is_active'
    ];

    public array $translatable = [
        'title',
        'description',
        'image',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'image' => 'array',
    ];
}
