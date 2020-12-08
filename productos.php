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
    <link rel="stylesheet" href="assets/css/Productos.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;0,900;1,700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
<header class="site-header inicio" style="background-color: rgb(75, 75, 75)">
<div class="contenedor">
<div class="barra">
<div class="barra-img"><img src="assets/img/logo/logo.png" height="55px" width="55px"></div>
<nav class="navegacion">
     <a href="principal.php">Inicio</a>
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

        <h2 class="fw-300 centrar-texto" style=" font-family: serif;">PRODUCTOS.</h2>

        <div class="iconos-nosotros" class="fw-300 centrar-texto">
            <div class="icono">
            <div class="img"><img src=<?php echo $temp[0]['url_img'] . ' width="250"';?>></div>
                <p class="parrafo1"><?php echo $temp[0]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[0]['precio_compra'];?></p></p>
               
                <a href="iphone16.html" class="boton">Ver Producto</a>
            </div>
            <hr>

            <div class="icono">
            <div class="img"><img src=<?php echo $temp[1]['url_img'] . ' width="250"';?>></div>
                <p class="parrafo1"><?php echo $temp[1]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[1]['precio_compra'];?></p></p>
               
                <a href="iphone18.html" class="boton">Ver Producto</a>
            </div>
            <hr>
            <div class="icono">
            <div class="img"><img src=<?php echo $temp[2]['url_img'] . ' width="250"';?>></div>
                <p class="parrafo1"><?php echo $temp[2]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[2]['precio_compra'];?></p></p>
               
                <a href="iphone17.html" class="boton">Ver Producto</a>
            </div>
        </div>
      

        <div class="iconos-nosotros">
            <div class="icono">
            <div class="img"><img src=<?php echo $temp[3]['url_img'] . ' width="250"';?>></div>
                <p class="parrafo1"><?php echo $temp[3]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[3]['precio_compra'];?></p></p>
               
                <a href="iphone10.html" class="boton">Ver Producto</a>
            </div>
            <hr>

            <div class="icono">
            <div class="img"><img src=<?php echo $temp[4]['url_img'] . ' width="250"';?>></div>
                <p class="parrafo1"><?php echo $temp[4]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[4]['precio_compra'];?></p></p>
             
                <a href="iphone14.html" class="boton">Ver Producto</a>
            </div>
            <hr>
           
            <div class="icono">
            <div class="img"><img src=<?php echo $temp[5]['url_img'] . ' width="250"';?>></div>
                <p class="parrafo1"><?php echo $temp[5]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[5]['precio_compra'];?></p></p>
            
                <a href="iphone5.html" class="boton">Ver Producto</a>
            </div>
        </div>
        

        <div class="iconos-nosotros" class="fw-300 centrar-texto">
            <div class="icono">
            <div class="img"><img src=<?php echo $temp[6]['url_img'] . ' width="250"';?>></div>
                <p class="parrafo1"><?php echo $temp[6]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[6]['precio_compra'];?></p></p>
             
                <a href="iphone6.html" class="boton">Ver Producto</a>
            </div>
            <hr>
           
            <div class="icono">
            <div class="img"><img src=<?php echo $temp[7]['url_img'] . ' width="250"';?>></div>
                <p class="parrafo1"><?php echo $temp[7]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[7]['precio_compra'];?></p></p>
            
                <a href="iphone7.html" class="boton">Ver Producto</a>
            </div>
            <hr>
           
            <div class="icono">
            <div class="img"><img src=<?php echo $temp[8]['url_img'] . ' width="250"';?>></div>
                <p class="parrafo1"><?php echo $temp[8]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[8]['precio_compra'];?></p></p>
               
                <a href="iphone8.html" class="boton">Ver Producto</a>
            </div>
        </div>
        

        <div class="iconos-nosotros">
            <div class="icono">
            <div class="img"><img src=<?php echo $temp[9]['url_img'] . ' width="250"';?>></div>
               
                <p class="parrafo1"><?php echo $temp[9]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[9]['precio_compra'];?></p></p>
               
                <a href="iphone12.html" class="boton">Ver Producto</a>
            </div>
            <hr>

            <div class="icono">
            <div class="img"><img src=<?php echo $temp[10]['url_img'] . ' width="250"';?>></div>
          
                <p class="parrafo1"><?php echo $temp[10]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[10]['precio_compra'];?></p></p>
        
                <a href="iphone3.html" class="boton">Ver Producto</a>
            </div>
            <hr>
            
            <div class="icono">
            <div class="img"><img src=<?php echo $temp[11]['url_img'] . ' width="250"';?>></div>
           
                <p class="parrafo1"><?php echo $temp[11]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[11]['precio_compra'];?></p></p>
           
                <a href="iphone11.html" class="boton">Ver Producto</a>
            </div>
        </div>
     
  
        <div class="iconos-nosotros" class="fw-300 centrar-texto">
            <div class="icono">
            <div class="img"><img src=<?php echo $temp[12]['url_img'] . ' width="250"';?>></div>
          
                <p class="parrafo1"><?php echo $temp[12]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[12]['precio_compra'];?></p></p>
               
                <a href="iphone9.html" class="boton">Ver Producto</a>
            </div>
            <hr>

            <div class="icono">
            <div class="img"><img src=<?php echo $temp[13]['url_img'] . ' width="250"';?>></div>
             
                <p class="parrafo1"><?php echo $temp[13]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[13]['precio_compra'];?></p></p>
               
                <a href="iphone15.html" class="boton">Ver Producto</a>
            </div>
            <hr>
            <div class="icono">
            <div class="img"><img src=<?php echo $temp[14]['url_img'] . ' width="250"';?>></div>
            
                <p class="parrafo1"><?php echo $temp[14]['nombre_producto'];?></p>
                <p class="parrafo1"><p class="parrafo1">$<?php echo $temp[14]['precio_compra'];?></p></p>
               
                <a href="iphone13.html" class="boton">Ver Producto</a>
            </div>
        </div>
       <br>
       <br>
        </section>

    <footer class="fondo">
        <p>Copyrigth &copy; 2019 IPHONE WORDL | Todos los derechos reservados</p>
    </footer>

</body>

</html>