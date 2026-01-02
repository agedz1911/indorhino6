<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class AtGlance extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'file_at_glances',
        'room',
        'date',
        'time',
        'title',
        'description',
        'is_active',
        'no_urut',
        'color',
        'moderator',
        'category_sesi'
    ];

    public function schedules() : HasMany
    {
       return $this->hasMany(Schedule::class, 'glance_id');
    }
}
