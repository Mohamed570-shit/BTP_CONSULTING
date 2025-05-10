<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageALaUne extends Model
{
    use HasFactory;

    protected $fillable = [
        'a_la_une_id',
        'image_path',
        'title',
        'description',
        'order',
    ];

    /**
     * Get the a la une that owns the image.
     */
    public function aLaUne()
    {
        return $this->belongsTo(ALaUne::class, 'a_la_une_id');
    }
}