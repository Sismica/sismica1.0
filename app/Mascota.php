<?php

namespace Bloopets;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Mascota extends Model
{	

	protected $fillable = ['correo', 'idcomunidad','nombre','raza','sexo','edad','foto','colorPelaje','chip', 'joby', 'comidaFavorita','crias','pedigri'];

    
    public function Users(){
    	return $this->belongsto(User::class);
    }

    public function Mascotas(){
    	return $this->belongsto(Mascota::class);
    }

    /*public function setFotoAttribute($foto){
    	$this->attributes['foto'] = Carbon::now()->micro.$foto->getClientOriginalName();
    	$name =  Carbon::now()->micro.$foto->getClientOriginalName();
    	\Storage::disk('local')->put($name, \File::get($foto));
	}*/	
 
}
