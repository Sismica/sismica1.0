<?php

namespace Bloopets\Http\Controllers;

use Illuminate\Http\Request;

use Bloopets\Http\Requests;
use Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class FromController extends Controller
{

    
    
    public function index(){
		$razas = \Bloopets\Raza::All();
		$comunidades = \Bloopets\Comunidade::All();
        return view('index',compact('razas','comunidades'));

    }

    public function crear_usuario(Request $request){
    	
   		    \Bloopets\User::create(['email' => $request->input('correo'),'password' => bcrypt($request->input('clave'))]);

            $archivo = $request->file('archivo');
            $input  = array('image' => $archivo) ;
            $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:20000');
            $validacion = Validator::make($input,  $reglas);
            if ($validacion->fails())
            {
            return response()->json(array('imgInval'=>"false"));        
            }
            else
            {
                $nombre_original=$archivo->getClientOriginalName();
                $extension=$archivo->getClientOriginalExtension();
                $nuevo_nombre="userimagen-".$nombre_original.".".$extension;
                $r1=Storage::disk('local')->put($nuevo_nombre,  \File::get($archivo) );
                $rutadelaimagen="../public/fotos/".$nuevo_nombre;
                if ($r1){
                    \Bloopets\Mascota::create([
                        'correo' => $request->input('correo'),
                        'idcomunidad' => $request->input('idcomunidad'),
                        'nombre' => $request->input('nombre'),
                        'raza' => $request->input('raza'),
                        'sexo' => $request->iCheck,
                        'foto' =>$rutadelaimagen,
                    ]);
                    \Bloopets\Perfile::create(['correo' => $request->input('correo'),]);
                    return response()->json(array('mensaje'=>'true'));
                }
                else
                {
                //return response()->json(array('mensaje'=>"error al subir la imagen"));
                 
                }
            }        
            	        
    	
    }
}
