                 <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
sss
<div class="col-md-12 registro">
                <div class="fila1">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="disabledTextInput">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control text" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="disabledTextInput">Comunidad</label>
                            <select id="listaComunidad" name="idcomunidad" class="form-control text">
                            <option>Seleccione...</option>
                             @foreach($comunidades as $comunidad)
                            <option value="{{$comunidad->id}}"> {{$comunidad->nombComunidad}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="fila3">
                <div class="col-md-6">
                        <label>Sexo</label><br>
                <div class="form-group check">
                        <input type="radio" id="m" value="masculino" name="iCheck" checked > Masculino
                        <input type="radio" id="f" value="femenino" name="iCheck"> Femenino
                    </div>
                </div>
                     <div class="col-md-6"><div class="foto"><span type="file"></span></div>
                        <!-- formulario para subir foto 
                        <form  id="f_subir_imagen" name="f_subir_imagen" method="post" class="formarchivo" enctype="multipart/form-data" >                -->
                            <!-- <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>">  -->
                            <label class="uploader foto" ondragover="return false">
                                <i class="icon-upload icon"></i>
                                <img src="" class="">
                                <input type="file" name="archivo" id="archivo" accept="image/*" required>
                            </label>
                        <!-- </form> -->

                    </div> 
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Raza a la que pertenesco</label>
                            <!-- <input type="text" id="raza" class="form-control text" placeholder="Labrador"> -->
                            <select id="Selectrazas" name="raza" class="form-control text">
                            <option>Seleccione...</option>
                            @foreach($razas as $raza)
                            <option value="{{$raza->id}}"> {{$raza->raza}}</option>
                            @endforeach
                            </select>

                        </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Email de mi mejor amigo</label>
                            <input type="mail" id="correo" name="correo" class="form-control text1" placeholder="miamigo@bloopets.com">
                        </div>
                </div>
                <div class="fila2">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="Password" id="clave" name="clave" class="form-control text" placeholder="**********">
                            </div>
                    </div>
                    <div class="col-md-6 botonR">
                        {!!link_to('#', $title='Registrar', $attributes =['id'=>'btn_registrar', 'class'=>'btn btn-bloopets btn-guardar'], $secure= null)!!}
                    </div>
                </div>
</div> <!--fin del div registro -->
            