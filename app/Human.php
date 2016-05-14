<?php

namespace Bloopets;

use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
	protected $fillable = ['correo', 'clave','nombres','apellidos'];
	
    public function Mascotas(){
    	return $this->hasMany(Mascota::class);
    }

    public function Perfiles()
    {
        return $this->hasOne(Perfile::class);
    }

}
