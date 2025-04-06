<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'titre',
        'slug',
        'contenu',
        'ordre'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}