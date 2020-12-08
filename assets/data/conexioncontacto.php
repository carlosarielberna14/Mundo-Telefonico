<?php

 class Conexion{
  var $conn;

  function conectar(){
    $conn=NULL;
    try{
      $conn = new PDO ('mysql:host=localhost;dbname=iphonewordl',
      'root','');

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo 'Conectando a la base de datos <br> <br>';

    }catch(PDOException $e){
      die(print_r ('Error conectando con la base de datos: '
            . $e->getMesage()));
    }return $conn;
  }

    function mostrarDato($nombre,$correo,$asunto,$mensaje){
        $con = $this->conectar();

        /*$consulta = 'INSERT INTO usuario(usuario, contrasena, nombre, correo_e)
                     VALUES (:user, :pass, :nombre, :correo)';

        $stmt = $con->prepare($consulta);
        $rows = $stmt->execute(array(':user'=>$user, ':nombre'=>$nombre, ':pass'=>$pass, ':correo'=>$correo));*/

        $stmt = $con->prepare('INSERT INTO comentario( nombre, correo,asunto,mensaje) VALUES (:nombre,:correo,:asunto,:mensaje)');
        $rows = $stmt->execute(array( ':nombre'=>$nombre, ':correo'=>$correo,':asunto'=>$asunto,':mensaje'=>$mensaje));
        
  
        return $rows;
  }

}


?>