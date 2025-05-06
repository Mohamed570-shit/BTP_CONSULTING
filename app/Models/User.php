<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
use HasFactory, Notifiable;

protected $fillable = [
'name',
'email',
'password',
'role',
'profile_image',
];

protected $hidden = [
'password',
'remember_token',
];

protected $casts = [
'email_verified_at' => 'datetime',
];

/**
* Vérifie si l'utilisateur a un rôle spécifique
*
* @param string $role
* @return bool
*/
public function hasRole(string $role): bool
{
return $this->role === $role;
}
}



// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Spatie\Permission\Traits\HasRoles;

// class User extends Authenticatable
// {
// use HasFactory, Notifiable, HasRoles;

// protected $fillable = [
// 'name',
// 'email',
// 'password',
// 'profile_image',
// ];

// protected $hidden = [
// 'password',
// 'remember_token',
// ];

// protected $casts = [
// 'email_verified_at' => 'datetime',
// ];
// }
