<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motdg extends Model
{
    protected $table = 'motdg_btpc';

    protected $fillable = [
        'title',
        'subtitle',
        'welcome',
        'mission',
        'engagement',
        'future',
        'director_name',
        'director_title',
        'image',
    ];
}