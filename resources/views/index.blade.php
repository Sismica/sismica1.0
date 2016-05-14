<!--    vista inicio 
    #autor: jhony guaman
    fecha creacion: 03/04/2016
-->
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
  <!-- Basic -->
  <title>Bloopets</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/estiloBloopets.css')}}">
  <link rel="stylesheet" href="{{asset('css/fileuploader.css')}}">
  <link href="https://file.myfontastic.com/SLzQsLcd7FmmzjBYTcyVW3/icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('icheck-1/skins/all.css')}}">

  {!!Html::style('admin/fonts/css/font-awesome.min.css')!!}
  
    
  <!-- Define Charset -->
  <meta charset="utf-8">
  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="iThemesLab">
  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="{{asset('nuevo/asset/css/bootstrap.min.css')}}" type="text/css" media="screen">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{asset('nuevo/css/font-awesome.min.css')}}" type="text/css" media="screen">
  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/slicknav.css')}}" media="screen">
  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/style.css')}}" media="screen">
  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/responsive.css')}}" media="screen">
  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/animate.css')}}" media="screen">
  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/colors/red.css')}}" title="red" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/colors/jade.css')}}" title="jade" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/colors/green.css')}}" title="green" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/colors/blue.css')}}" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/colors/beige.css')}}" title="beige" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/colors/cyan.css')}}" title="cyan" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/colors/orange.css')}}" title="orange" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/colors/peach.css')}}" title="peach" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/colors/pink.css')}}" title="pink" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/colors/purple.css')}}" title="purple" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/colors/sky-blue.css')}}" title="sky-blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{asset('nuevo/css/colors/yellow.css')}}" title="yellow" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/hover.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/hover-min.css')}}">

  <!-- Margo JS  -->
  <script type="text/javascript" src="{{asset('nuevo/js/jquery-2.1.4.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/jquery.migrate.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/modernizrr.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/asset/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/jquery.fitvids.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/owl.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/nivo-lightbox.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/jquery.isotope.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/jquery.appear.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/count-to.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/jquery.textillate.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/jquery.lettering.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/jquery.easypiechart.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/jquery.nicescroll.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/jquery.parallax.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/mediaelement-and-player.js')}}"></script>
  <script type="text/javascript" src="{{asset('nuevo/js/jquery.slicknav.js')}}"></script>
  <script src="{{asset('icheck-1/icheck.js')}}"></script>
  <script src="{{asset('js/Bloopetsfunciones.js')}}"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

</head>

<body>

  <!-- Full Body Container -->
  <div id="container">
    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    
    @include('ClienteBloopets.Template.menu') <!--  incluimmos el menu -->

    <!-- Start Home Page Slider -->
    <section id="home">
        <div class="col-md-7" style="margin-right: -50px;"></div>    
        <div class="col-md-5 formularios">
        <div class="tabs-section">

              <!-- Nav Tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-desktop"></i>Registrarse</a></li>
                <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-leaf"></i>Iniciar Sesión</a></li>
                
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active" id="tab-1">
                  {!!Form::open(['files'=>true, 'id'=>'registro'])!!}
                  @include('ClienteBloopets.Template.Form.registrar')     
                  {!!Form::close()!!}
                </div>
                <!-- Tab Content 2 -->
                <div class="tab-pane fade" id="tab-2">
                  <div id="login" class="animate form">
                    <section class="login_content">         
                      
                        @include('ClienteBloopets.Template.Form.bloopets_login')
                              <!-- form -->
                    </section>
                    <!-- content -->
                  </div>
                </div>
              </div>
              <!-- End Tab Panels -->
        </div>
        </div>
  
    </section>
    <!-- End Home Page Slider -->

<!-- Start sesion nosotros-->
  <section id="nosotros">
    @include('ClienteBloopets.Template.seccion1')   
  </section>
<!-- End sesion nosotros -->

<!-- start seccion   sec-2-->
  <section class="sec-2">
    @include('ClienteBloopets.Template.seccion2')   
  </section>
<!-- end seccion sec-2 -->

<!-- Start seccion sec-3 -->
  <section class="sec-3">
    @include('ClienteBloopets.Template.seccion3')   
  </section>
<!-- end seccion sec-3 -->

<!-- Strart seccion sec-4 -->
    @include('ClienteBloopets.Template.seccion4')
<!-- End seccion sec-4 -->

<!-- Start seccion  sec-5 -->
  <section class="sec-5">
    @include('ClienteBloopets.Template.seccion5')
  </section>
<!-- End seccion sec-5 -->

<!-- Start seccion sec-6 -->
  <section class="sec-6">
    @include('ClienteBloopets.Template.seccion6')
  </section>
<!-- End seccion sec-6 -->

<!-- Start seccion sec-7 -->
  <section class="sec-7 container">
    @include('ClienteBloopets.Template.seccion7') 
  </section>
<!-- End seccion sec-7 -->


  <script type="text/javascript" src="{{asset('nuevo/js/script.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/Bloopetsfunciones.js')}}"></script>
  <script src="{{asset('js/FileUploader.js')}}"></script>
    <script type="text/javascript">
        new FileUploader('.uploader');
        //$('select').select2();
        $("#Selectrazas").select2();
    </script> 

</body>
</html>