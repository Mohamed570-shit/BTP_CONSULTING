<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['domaine_id', 'image'];

    public function domaine()
    {
        return $this->belongsTo(Domaine::class);
    }
}