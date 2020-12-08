<?php 

 include('assets/data/conexion.php');

 $obj = new Conexion;

 $res = $obj->buscarProducto();

 $temp = array();

 $temp = $res;

 
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Estilos personalizados -->
    <script src="https://kit.fontawesome.com/9d6315ac3e.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Iphone Wordl</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;0,900;1,700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
<header class="site-header inicio" style="background-color: rgb(75, 75, 75)">
<div class="contenedor">
<div class="barra">
<div class="barra-img"><img src="assets/img/logo/logo.png" height="55px" width="55px"></div>
<nav class="navegacion">
    <a href="Accesorios.html">Accesorios</a>
    <a href="productos.php">Productos</a>
    <a href="index2.php">Metodos de pago</a>
    <a href="Blog.html">Blog</a>
    <a href="contacto.html">Contacto</a>
</nav>
</div>
</div>
</header>

<section class="contenedor-seccion" style="background: linear-gradient(to right, rgb(48, 255, 134), rgb(160, 205, 235))">
        <h2 class="fw-300 centrar-texto" style=" font-family: serif;"> Explora nuestros nuevos diseños </h2>
    <div class="iconos-nosotros">
    <div class="icono">
    <div class="img"><img src=<?php echo $temp[0]['url_img'] . ' width="250"';?>></div>
    <p class="parrafo1"><?php echo $temp[0]['nombre_producto'];?></p>
    <p class="parrafo1"><?php echo $temp[0]['precio_compra'];?></p>
    <a href="iphone16.html" class="boton">Ver Producto</a>
    </div>
 
  
    <div class="icono">
    <div class="img"><img src=<?php echo $temp[1]['url_img'] . ' width="250"';?>></div>
    <p class="parrafo1"><?php echo $temp[1]['nombre_producto'];?></p>
    <p class="parrafo1"><?php echo $temp[1]['precio_compra'];?></p>
    <a href="iphone18.html" class="boton">Ver Producto</a>
 
</div>
  
  
    <div class="icono">
        <br>
        <br>
    <div class="img"><img src=<?php echo $temp[7]['url_img'] . ' width="215"';?>></div>
    <p class="parrafo1"><?php echo $temp[7]['nombre_producto'];?></p>
    <p class="parrafo1"><?php echo $temp[7]['precio_compra'];?></p>
    <br>
    <a href="iphone17.html" class="boton">Ver Producto</a>
    </div>
</div>
<br>
<br>

</section>
    
<footer class="fondo" style="background-color: rgb(75, 75, 75)">     
    <p>Copyrigth &copy; 2019 IPHONE WORDL | Todos los derechos reservados</p>
</footer>

</body>
</html>
