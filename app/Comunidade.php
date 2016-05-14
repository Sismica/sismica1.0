<?php

namespace Bloopets;

use Illuminate\Database\Eloquent\Model;

class Comunidade extends Model
{
    
	protected $fillable = ['nombComunidad', 'descripcion'];

    public function Mascotas(){
    	return $this->hasMany(Mascota::class);
    }

    public function Razas(){
    	return $this->hasMany(Raza::class);
    }
}
