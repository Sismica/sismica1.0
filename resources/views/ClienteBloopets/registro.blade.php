<!-- 
vista registro 
@autor; jhony guaman
@fecha de creacion: 19 de marzo
 -->
@extends('ClienteBloopets.Template.main')
@section('title','Crear una Cuenta')
<link rel="stylesheet" href="{{asset('css/fileuploader.css')}}">
<link href="https://file.myfontastic.com/SLzQsLcd7FmmzjBYTcyVW3/icons.css" rel="stylesheet">

<a href="/"><img id="logo" src="{{asset('dist/img/logo2.png')}}"></a>
<section id="seccion">
<!-- 	<img id="mascota3"src="{{asset('dist/img/periquito.png')}}">
	 -->	<img id="mascota2"src="{{asset('dist/img/mascotas.png')}}">
</section>
@include('ClienteBloopets.Template.menu')
@section('encabezado')
        <a class="loginlink" href="login">Iniciar Sesión</a>
		<section class="container">
		<p class="btitulo">Registrate y encuentra más amigos<img class="img1" src="{{asset('dist/img/dog.png')}}"></p>
@endsection

@section('content')

		<div class="row">
				<img class="banner" src="{{asset('dist/img/banner1.jpg')}}">
			<div class="col-md-6 registro">
				<div class="fila1">
					<div class="col-md-6">
						<div class="form-group">
		      				<label for="disabledTextInput">Nombre</label>
		      				<input type="text" id="nombre" class="form-control" placeholder="Nombre">
		    			</div>
		    		</div>
		    		<div class="col-md-6">
		    			<div class="form-group">
		      				<label for="disabledTextInput">Comunidad</label>
		      				<select id="listaDeshabilitada" class="form-control">
		        			<option>Seleccione...</option>
		        			<option>Perros</option>
		        			<option>Gatos</option>
		        			<option>Aves</option>
		      				</select>
		    			</div>
	    			</div>
    			</div>
    			<div class="fila3">
    			<div class="col-md-6">
	      				<label>Sexo</label><br>
   				<div class="form-group check">
	      				<input type="radio" name="iCheck" checked> Masculino
						<input type="radio" name="iCheck"> Femenino
	    			</div>
	    		</div>
		    		 <div class="col-md-6"><!--
		    			<div class="foto"><span type="file"></span></div>-->
		    			<label class="uploader foto" ondragover="return false">
            			<i class="icon-upload icon"></i>
            			<img src="" class="">
            			<input type="file" accept="image/*" name="file">
        				</label>
		    		</div> 
		    	</div>
		    	<div class="col-md-6">
						<div class="form-group">
		      				<label>Raza a la que pertenesco</label>
		      				<input type="text" id="raza" class="form-control" placeholder="Labrador">
		    			</div>
		    	</div>
				<div class="col-md-6">
						<div class="form-group">
		      				<label>Email de mi mejor amigo</label>
		      				<input type="text" id="raza" class="form-control" placeholder="miamigo@bloopets.com">
		    			</div>
		    	</div>
		    	<div class="fila2">
			    	<div class="col-md-6">
							<div class="form-group">
			      				<label>Contraseña</label>
			      				<input type="Password" id="raza" class="form-control" placeholder="**********">
			    			</div>
			    	</div>
			    	<div class="col-md-6 botonR">
		    			<a class="btn btn-success" href=""> Registrame</a>
		    		</div>
			    </div>
			</div>
		</div>
		</section>
@endsection

@section('scripts')
<!-- <script src="{{asset('mysql/mysqlwslib.js')}}"></script> -->
	<script src="{{asset('js/FileUploader.js')}}"></script>
    <script type="text/javascript">
        new FileUploader('.uploader');
    </script> 
@endsection

