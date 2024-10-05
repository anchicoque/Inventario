<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    //protected $table = "usuarios";//Para vincular el modelo con una tabla o buscar una tabla que uno eliga o que no cumple la convención

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [//Editables campos
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [//ocultos
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array//ogligar el formato del dato a ingresar en el campo
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',//Debe estar encriptado
        ];
    }

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function comments(): HasMany
    // {
    //     //return $this->hasMany(Comment::class, 'user_id', 'id');//si no cumple la momenclatura
    //     return $this->hasMany(Comment::class');// si cumple la convención
    // }
}
