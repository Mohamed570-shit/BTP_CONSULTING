<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chiffre extends Model
{
    protected $table = 'chiffres_btpc';
    protected $fillable = ['icon', 'value', 'label'];
}