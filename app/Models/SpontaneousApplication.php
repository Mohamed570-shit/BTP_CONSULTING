<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpontaneousApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'cv_path',
        'message'
    ];
}
