<?php
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*Rutas para la administracion*/
Route::get('welcomeAdmin',function(){	return view('Adminbloopets.welcomeAdmin');});
Route::get('welcomeAdmin/home',function(){	return view('Adminbloopets.AdminHome');});


//Route::post('welcomeAdmin/Razas/agregarRaza','RazaControler@store');
Route::post('welcomeAdmin/Razas/agregarRaza', array('as'=>'saveInfo','uses'=>'RazaControler@store'));
Route::post('welcomeAdmin/Razas/ListarRaza', array('as'=>'list','uses'=>'RazaControler@listar'));
Route::post('welcomeAdmin/Comunidades/crearComunidad', array('as'=>'saveComu','uses'=>'ComunidadController@store'));
Route::resource('welcomeAdmin/Razas','RazaControler');
Route::resource('welcomeAdmin/Comunidades','ComunidadController');	

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*
/----------------------------------------------------------------------------
/METODOS GET 
/----------------------------------------------------------------------------
*/
Route::get('/razas',function(){$comu_id= Input::get('comu_id'); $razas = \Bloopets\Raza::where('idcomunidad','=',$comu_id)->get();return Response::json($razas);	});
Route::get('logout', array('as' => 'logout', 'uses' => 'Auth\AuthController@getLogout'));
Route::get('/','FromController@index');


/*
/----------------------------------------------------------------------------
/METODOS POST 
/----------------------------------------------------------------------------
*/
Route::post('login', array('as' => 'home', 'uses' => 'Auth\AuthController@postLogin'));
Route::post('/usuario',array('as'=>'registrar','uses'=>'FromController@crear_usuario'));

Route::group(['middleware' => ['web']], function () {
	
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::get('home', 'HomeController@index');

});

