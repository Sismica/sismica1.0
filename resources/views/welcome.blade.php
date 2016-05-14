<!--    vista inicio 
    #autor: jhony guaman
    fecha creacion: 10/03/2016
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Bloopets</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="{{asset('dist/img/animal.png')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bloopets.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/estiloBloopets.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/hover.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/hover-min.css')}}">
        <link href="{{asset('ionicons-master/css/ionicons.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('ionicons-master/css/ionicons.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


    </head>
     <body>
            <a class="loginlink" data-toggle="modal" data-target="#myModal">Iniciar Sesión</a>
            <div class="container1`">
                <div class="escena1">
                    <section class="content">
                        <div class="title">{{"¿Tienes una Mascota?"}}</div>
                        <div><span id="btn_si" class="myButton hvr-float-shadow">Si</span>
                             <span id="btn_no" class="myButton hvr-float-shadow">No</a></span>
                    </div>
                    </section>
                </div>
                <div class="escena2">
                    <section class="content1 heidde">
                        <h3 class="title3"> Excelente</h3>
                        <div class="title2">{{"Tenemos varias comunidades para su mascota"}}</div>
                        <div><a class="myButton hvr-float-shadow" href="">Visita nuestro sitio</a>
                             <a class="myButton hvr-float-shadow " href="registro">Registra a su mascota</a></div>
                    </section>
                </div>
            </div>

            <!-- modal -->
            <div class="modal fade" id="myModal" role="dialog">
                 <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">           
                            <section id="content" class="centrar">
                                <form action="">
                                    <h2>Bloopets</h2>
                                    <div class="imagen"></div><br>   
                                        <div>
                                            <input type="text" placeholder="Usuario o Correo" required="" id="username" />
                                        </div>
                                        <div>
                                            <input type="password" placeholder="Contraseña" required="" id="password" />
                                        </div>
                                        <div>
                                            <input type="submit" value="Ingresar" />
                                                <input type="submit" value="Cancelar" data-dismiss="modal"/>
                                                    <a href="formulario_registro">Registrate</a><br>
                                        </div>
                                </form> <!-- form -->
                            </section><!-- content -->
                                    <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
    </body>
    <script src="{{asset('js/jQuery/jQuery-2.2.0.min.js')}}"></script>
    <script src="{{asset('js/jQueryUI/jQuery-ui.js')}}"></script>
    <script src="{{asset('js/waypoint/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset('js/Bloopetsfunciones.js')}}"></script>
    <script src="{{asset('js/animacions.js')}}"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</html>
