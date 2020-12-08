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
    }
    return $conn;
  }// Fin function conectar()
  
    function buscarUsuario($user, $pass){
      $con = $this->conectar();
 
      $consulta = 'SELECT nombre
                    FROM usuario 
                    WHERE nombre=:usuario         
                    AND contrasena=:pass';
                     
      $stmt = $con->prepare($consulta);
      $stmt->execute(array(':usuario'=>$user,':pass'=>$pass));
      $registro = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $numRegistros = count($registro);

      return $numRegistros;
    }
    function buscarProducto(){
      $con = $this->conectar();
 
      $consulta = 'SELECT * FROM  producto';
      $stmt = $con->prepare($consulta);
      $stmt->execute();
      $registro = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $registro;
    }
 }
?>