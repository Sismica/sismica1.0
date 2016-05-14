<?php

namespace Bloopets;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
   
    public function Mascotas(){
        return $this->hasMany(Mascota::class);
    }

    public function Perfiles()
    {
        return $this->hasOne(Perfile::class);
    }


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
