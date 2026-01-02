<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Registration extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'category',
        'description',
        'price'
    ];

    public array $translatable = [
        'title',
        'category',
        'description',
        'price'
    ];

    public $casts = [
        'title' => 'array',
        'category' => 'array',
        'description' => 'array',
        'price' => 'array'
    ];
}
