<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class OffreEmploi extends Model
{
    use HasFactory;

    protected $table = 'offre_emplois';

    protected $fillable = [
        'titre',
        'slug',
        'description',
        'location',
        'type',
        'date_expiration',
    ];

    protected $dates = ['date_expiration'];

    public function candidatures()
    {
        return $this->hasMany(Candidature::class, 'offre_id');
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($offre) {
            $offre->slug = Str::slug($offre->titre);
        });
        static::updating(function ($offre) {
            $offre->slug = Str::slug($offre->titre);
        });
    }
    public function getDateExpirationAttribute($value)
{
    return Carbon::parse($value);
}
}