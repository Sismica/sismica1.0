 <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              <!-- <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                </li>
              </ul> -->
              <!-- End Contact Info -->
            </div>
            
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand hvr-grow" href="">
              <img id="logo" alt="" src="{{asset('dist/img/logo2.png')}}">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Buscar Amigos...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li><a class="active" href="#">Inicio</a></li>
              <li><a href="#nosotros">Nosotros</a></li>
              <li><a href="#">Comunidades</a>
                <ul class="dropdown">  
                @foreach($comunidades as $comunidad)
                            <li><a href="#">{{$comunidad->nombComunidad}}</a></li>
                @endforeach 
                  
                </ul>
              </li>
              <li><a href="#">Tienda</a></li>
              <li><a href="#">Centros Veterinarios</a></li>
              <li><a href="#">{{$usuarioactual}}
                  </a>
                <ul class="dropdown">  
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Configuración</a></li>
                            <li><a href="logout">Salir</a></li>
                  
                </ul>
              </li>
              <li>
                  
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li><a class="active" href="#">Inicio</a></li>
              <li><a href="#">Nosotros</a></li>
              <li><a href="#">Comunidades</a>
                <ul class="dropdown">   
                  <li><a href="#">Perros</a></li>
                  <li><a href="#">Gatos</a></li>
                  <li><a href="#">Aves</a></li>
                </ul>
              </li>
              <li><a href="#">Tienda</a></li>
              <li><a href="#">Centros Veterinarios</a></li>
              <li><a href="#">Contáctanos</a></li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->