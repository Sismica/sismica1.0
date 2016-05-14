<?php
session_start();
require_once __DIR__ . '\bd_config.php';
function connectDB(){
    $conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD ,DB_DATABASE);
	if(!$conexion){echo 'Ha sucedido un error inexperado en la conexion de la base de datos';}
	return $conexion;
}

function disconnectDB($conexion){
	$close = mysqli_close($conexion);
	if(!$close){echo 'Ha sucedido un error inexperado en la desconexion de la base de datos';}
	return $close;
}

function getArraySQL($sql){
  $conexion = connectDB();
	mysqli_set_charset($conexion, "utf8");
	if(!$result = mysqli_query($conexion, $sql)) die();
	    $rawdata = array();
	    $i=0;
	while($row = mysqli_fetch_array($result)){
	        $rawdata[$i] = $row;
	        $i++;
	}
	return $rawdata;
  disconnectDB($conexion);
}
	/*$ruc = $_SESSION["ruc"];
	$_SESSION["ruc"]=$ruc;
	$bus = $_POST["0"];*/
 	$sql = "SELECT id,nombComunidad FROM comunidades";
  	$myArray = getArraySQL($sql);
  	echo json_encode($myArray);

?>