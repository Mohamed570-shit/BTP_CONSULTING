<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'icon','question','reponse'];

    public function cartes()
    {
        return $this->hasMany(Carte::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}