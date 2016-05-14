<!-- vista login
	@autor: jhony guaman 
	@fecha: 14/03/2016
 -->
@extends('ClienteBloopets.Template.main')
@section('title','Entre y encuentre amigos')
@section('encabezado') 
<span> <img id="logo" src="{{asset('dist/img/logo2.png')}}"></span>
<a class="loginlink" href="login">Iniciar Sesión</a>

@endsection

@section('content')

<div class="row from-login">
	<div class="col-xs-8 col-md-4 " id="ingresar">
		<div class="login-box-body">
			<p class="titulo">Bloopets</p>
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" id="user" class="form-control" placeholder="Correo electronico">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" id="secre" class="form-control" placeholder="Contraseña">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
             <!-- <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div> /.col
          </div> -->
            <div class="col-md-12 col-xs-4 btn-login">
              <a href="#">Olvidé mi contraseña</a><br>
              <a href="" id="login" class="btn btn-danger">Iniciar</a>
              <a href="/" id="cancelar" class="btn btn-danger">Cancelar</a>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
	</div>
	
</div>
@endsection

