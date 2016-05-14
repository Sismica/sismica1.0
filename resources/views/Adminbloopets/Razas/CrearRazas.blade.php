@extends('Layouts.AdminMain')
@section('content')
		<div class="row">
			<div class="cabeceraComunidad">
				<h3>Registro Razas</h3>
			</div>
		</div>
		<div class="row registraComunidad">
			<div class="col-md-6">
         {!!Form::open(array('url'=>'','class'=>'frmRazas','method'=>'POST'))!!}
         		<!-- <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> -->
         		{!!Form::label('Comunidades:')!!}
				<select id="Selectrazas" class="form-control text">
                            <option>Seleccione...</option>
                            @foreach($comunidades as $comunidad)
                            <option value="{{$comunidad->id}}"> {{$comunidad->nombComunidad}}</option>
                            @endforeach
                            </select>
         		{!!Form::label('Nombre razas:')!!}
				{!!Form::text('raza',null,['id'=>'raza','class'=>'form-control','placeholder'=>'Ingrese la raza(Labrador, Frensh)','required'=>''])!!}
         		{!!Form::button('Guardar',['class'=>'btn btn-success btn-guardar', 'id'=>'guardar'])!!}
         {!!Form::close()!!}
     		</div>	
     	</div>

@endsection

@section('scripts')
		<script>
		$(document).ready(function() {
			$("#guardar").click(function() {
			//var data=$(".frmRazas").serialize();
			var id =$('#Selectrazas').val();
			var raza=$('#raza').val();
			var token=$("#token").val();
			$.ajax({
				type 	:'post',
				url		:'{!!URL::route('saveInfo')!!}',
				headers :{'X-CSRF-TOKEN': token},
				data 	:{id:id,raza:raza},
				success:function(data){
					alert(data.sms);
				},error:function(){
					alert(data.err);
				}	
			});
			$('.frmRazas')[0].reset();
			});
		});
		</script>
@endsection