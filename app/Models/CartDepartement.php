<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDepartement extends Model
{
    use HasFactory;

    protected $fillable = ['departement_id', 'title', 'icon','subtitle', 'description', 'image'];

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}