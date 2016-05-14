<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
		<title>Bloopets @yield('title','Defaulf')</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-3.3.6/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/estiloBloopets.css')}}">
        <link rel="shortcut icon" href="{{asset('dist/img/animal.png')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('icheck-1/skins/all.css')}}">
		<link rel="stylesheet" href="{{asset('font-awesome-4.5.0/css/font-awesome.css')}}">

</head>
<body>
	@yield('encabezado')
	<div class="container">
	@yield('content')
	</div>
	<footer class="footer">
		<div class="container">
		<p id="footerParrafo"> copyright &copy; Bloopets 2016</p>
		</div>	
	</footer>
</body>
	<script src="{{asset('js/jQuery/jQuery-2.2.0.min.js')}}"></script>
	<script src="{{asset('js/jQueryUI/jQuery-ui.js')}}"></script>
	<script src="{{asset('js/jQueryUI/jQuery-ui.min.js')}}"></script>
	<script src="{{asset('css/bootstrap-3.3.6/js/bootstrap.js')}}"></script>
    <script src="{{asset('js/Bloopetsfunciones.js')}}"></script>
	<script src="{{asset('css/bootstrap-3.3.6/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/waypoint/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset('icheck-1/icheck.js')}}"></script>
	<script src="{{asset('js/animacions.js')}}"></script>
	@yield('scripts')

	
</html>
