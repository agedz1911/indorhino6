<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    use HasFactory;

     protected $fillable = [
        'time_speaker',
        'topic_title',
        'speaker',
        'glance_id',
        'faculty_id'
    ];

    public function glance() : BelongsTo
    {
        return $this->belongsTo(AtGlance::class, 'glance_id');
    }

    public function faculties(): BelongsTo
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }
}
