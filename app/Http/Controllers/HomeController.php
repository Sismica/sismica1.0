<?php namespace Bloopets\Http\Controllers;

use Bloopets\User;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

       $usuarioactual=\Auth::user();
       //$mascota = \Bloopets\mascota::whereRaw('correo = "'.$usuarioactual.'"')->get();       
       $comunidades = \Bloopets\Comunidade::All();
         return view('home', compact('usuarioactual','comunidades'));
		
	}

}