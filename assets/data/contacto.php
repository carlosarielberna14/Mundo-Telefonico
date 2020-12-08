<?php
include('conexioncontacto.php');
$obj =new Conexion;

$nombre  = $_POST['nombre'];
$correo   = $_POST['correo'];
$asunto   = $_POST['asunto'];
$mensaje  = $_POST['mensaje'];



$res = $obj->mostrarDato($nombre,$correo,$asunto,$mensaje);

if($res == 1){
  $datos = array('dato' => 'ok');
}else{
  $datos = array('dato' => 'no');
}

echo json_encode($datos, JSON_FORCE_OBJECT);
?>
