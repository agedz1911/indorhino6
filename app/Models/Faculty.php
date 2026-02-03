<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Faculty extends Model implements HasMedia
{
    use HasFactory,  InteractsWithMedia, HasTranslations;

    protected $fillable = [
        'name',
        'country',
        'email',
        'instagram',
        'linkedin',
        'twitter',
        'is_active',
        'image',
        'no_urut',
        'cv'
    ];

    public array $translatable = [
        'cv'
    ];

    protected $casts = [
        'cv' => 'array',
    ];

    public function schedule_faculty(): HasMany
    {
        return $this->hasMany(ScientificSchedule::class);
    }

    public function sesi_schedule(): HasMany
    {
        return $this->hasMany(ScheduleSession::class);
    }

    public function type_participants(): BelongsToMany
    {
        return $this->belongsToMany(TypeParticipant::class);
    }

    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class, 'faculty_id');
    }
}
