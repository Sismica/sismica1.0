<?php

namespace Bloopets;

use Illuminate\Database\Eloquent\Model;

class Perfile extends Model
{
	protected $fillable = ['correo', 'direccion','telefono','pais','ciudad'];


	public function Users()
    {
        return $this->belongsTo(User::class);
    }
    
}
