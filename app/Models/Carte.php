<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    protected $fillable = ['domaine_id', 'title', 'icon', 'description'];

    public function domaine()
    {
        return $this->belongsTo(Domaine::class);
    }
}