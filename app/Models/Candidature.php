<?php

namespace App\Models;

use App\Models\OffreEmploi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'offre_id',
        'nom',
        'email',
        'cv',
        'status'
    ];

    public function offre()
    {
        return $this->belongsTo(OffreEmploi::class);
    }
}
