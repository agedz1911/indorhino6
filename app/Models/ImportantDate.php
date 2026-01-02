<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ImportantDate extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'date',
        'date_end',
        'no_urut',
        'is_active'
    ];

    public array $translatable = [
        'title',
        'date',
        'date_end',
        'no_urut',
        'is_active'
    ];

    protected $casts = [
        'title' => 'array',
        'date' => 'array',
        'date_end' => 'array',
        'no_urut' => 'array',
        'is_active' => 'array',
    ];
}
