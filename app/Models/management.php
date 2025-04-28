<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'icon',
        'active',
        'order',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
