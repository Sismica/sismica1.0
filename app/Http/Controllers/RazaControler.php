<?php

namespace Bloopets\Http\Controllers;

use Illuminate\Http\Request;

use Bloopets\Http\Requests;

use App\Raza;

class RazaControler extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        return view('Adminbloopets.Razas.ListaRazas');
        //$id = \Bloopets\Raza::whereRaw('id = (select max(`id`) from razas)')->get();       
        //return $razas;
    }



    public function save(Request $request){

        try{
        $raza = new Raza;
        $raza ->raza=$request->raza;
        $raza ->save();
        return response()->json(array('sms'=>'true'));
        }catch(Excetion $e){
        return response()->json(array('err'=>'false'));

        }

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunidades = \Bloopets\Comunidade::All();

        return view('Adminbloopets.Razas.CrearRazas', compact('comunidades'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
if($request->ajax()){
    try{
            \Bloopets\Raza::create([
            'idcomunidad' => $request->id,
            'raza' => $request->raza,
            ]);
        return response()->json(array('sms'=>'Registro Correcto'));
        }catch(Excetion $e){
        return response()->json(array('sms'=>'Error al registrar'));
        
        }
    }

}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
