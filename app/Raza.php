<?php

namespace Bloopets;

use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
	protected $fillable = ['idcomunidad','raza'];
    

    public function Comunidades(){
    	return $this->belongsto(Comunidad::class);
    }
}
