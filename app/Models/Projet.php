<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'slug',
        'description',
        'image',
        'status',
        'num_marche_interne',
        'num_marche_externe',
        'maitre_ouvrage',
        'objet_marche',
        'date_osc',
        'delai_execution',
        'lieu_execution',
        'type_marche',
        'domaine',
        'coordonnee_x',
        'coordonnee_y',
        'icone_domaine'
    ];
}