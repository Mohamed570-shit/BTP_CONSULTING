<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ALaUne extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'presentation',
        'image',
        'date',
        'active',
        'slug',
    ];

    protected $casts = [
        'date' => 'date',
        'active' => 'boolean',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($aLaUne) {
            if (empty($aLaUne->slug)) {
                $aLaUne->slug = Str::slug($aLaUne->title) . '-' . time();
            }
        });
    }

    /**
     * Get the images for the a la une.
     */
    public function images()
    {
        return $this->hasMany(ImageALaUne::class, 'a_la_une_id')->orderBy('order');
    }
}