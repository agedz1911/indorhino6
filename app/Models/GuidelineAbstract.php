<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class GuidelineAbstract extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'description',
        'no_urut'
    ];

    public array $translatable = [
        'title',
        'description',
        'no_urut'
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'no_urut' => 'array',
    ];
}
