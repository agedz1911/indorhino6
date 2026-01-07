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
        'price',
        'wilayah_reg',
        'early_bird_reg',
        'normal_reg',
        'onsite_reg',
    ];

    public array $translatable = [
        'title',
        'category',
        'description',
        'price',
        'wilayah_reg',
        'early_bird_reg',
        'normal_reg',
        'onsite_reg',
    ];

    public $casts = [
        'title' => 'array',
        'category' => 'array',
        'description' => 'array',
        'price' => 'array',
        'wilayah_reg' => 'array',
        'early_bird_reg' => 'array',
        'normal_reg' => 'array',
        'onsite_reg' => 'array',
    ];
}
