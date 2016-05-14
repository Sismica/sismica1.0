<div class="row sec-7-row">
    <div class="col-md-1">
      <dl>
        <dt>COMUNIDAD</dt>
           @foreach($comunidades as $comunidad)
                            <dd> {{$comunidad->nombComunidad}}</dd>
           @endforeach
      </dl> 
    </div>
    <div class="col-md-1">
      <dl>
        <dt>SERVICIOS VETERINARIOS</dt>
        <dd>Veterinarias</dd>
        <dd>Clinicas Veterinarias</dd>
        <dd></dd>
      </dl>
    </div>
    <div class="col-md-2">
      <dl>
        <dt>CONTÁCTENOS</dt>
        <dd class="fa fa-map-marker" aria-hidden="true">Manta Av. 18 entre Calle 13 y 14 </dd>
        <dd class="fa fa-mobile" aria-hidden="true">  (+593) 098-927-2485 
        <br>(+593) 098-856-2240 
        <br>(+593) 052-622-540
        </dd>
        <dd class="fa fa-envelope-o" aria-hidden="true">info@portaldenegocios.com.ec</dd>

      </dl>
    </div>
    <div class="col-xs-12 col-md-8">
      ESPACIO PUBLICITARIO
    </div>
  </div>
  <div class="row">
    <div class="col-xs-4 col-md-2">
      <img id=".sec-7-logo1" alt="" src="{{asset('dist/img/logo2.png')}}">
      <dl><dt>www.bloopets.com</dt></dl>
    </div>
    <div class="col-xs-4 col-md-2">
      <img id=".sec-7-logo1" alt="" src="{{asset('dist/img/logomkt.png')}}">      
      <dl><dt>www.bloopets.com</dt></dl>
    </div>
    <div class="col-xs-4 col-md-2">
      <img id=".sec-7-logo1" alt="" src="{{asset('dist/img/logoportal.png')}}">
      <dl><dt>www.portaldenegocio.com.ec</dt></dl>
    </div>
    <div class="col-md-6 sec-7-foto">
      <img  alt="" src="{{asset('dist/img/fot5.jpg')}}">
    </div>
    <div class="col-md-6">
      <div class="copyright-section">
        copyrigth www.bloopets.com derechos reservadors
      </div>
    </div>
  </div>