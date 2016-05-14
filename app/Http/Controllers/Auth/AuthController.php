<?php

namespace Bloopets\Http\Controllers\Auth;
use Bloopets\User;
use Validator;
use Bloopets\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Bloopets\Http\Requests;
use Session;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

   /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
      
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    //login

       protected function getLogin()
    {
        $razas = \Bloopets\Raza::All();
        $comunidades = \Bloopets\Comunidade::All();
        return view('index',compact('razas','comunidades'));

    }


       

 public function postLogin(Request $request)
   {
    $this->validate($request, ['email' => 'required','password' => 'required',  ]);
    $credentials = $request->only('email', 'password');
        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            $usuarioactual=\Auth::user()->email;
            $mascota = \Bloopets\mascota::whereRaw('correo = "'.$usuarioactual.'"')->get();       
            $comunidades = \Bloopets\Comunidade::All();
            return view('home', compact('usuarioactual','comunidades','mascota'));
        }
    return "credenciales incorrectas";
    }


protected function getLogout()
    {
        $this->auth->logout();

        Session::flush();

        return redirect('/');
    }

//login
}