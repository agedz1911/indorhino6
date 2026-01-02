<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'logo',
        'website',
        'category',
        'is_active',
        'no_urut',
        'company_profile'
    ];
}
