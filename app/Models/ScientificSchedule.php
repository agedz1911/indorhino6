<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScientificSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'timeStart',
        'timeEnd',
        'topic',
        'faculty_id',
        'is_published'
    ];

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class);
    }

    public function session(): BelongsTo
    {
        return $this->belongsTo(ScheduleSession::class);
    }
}
