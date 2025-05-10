<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'diplome',
        'domaine',
        'post',
        'type',
        'cv',
        'lettre_motivation',
        'slug',
        'offre_id',
    ];
    public function offre()
    {
        return $this->belongsTo(OffreEmploi::class);
    }
}