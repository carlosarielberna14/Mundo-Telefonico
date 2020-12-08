<?php
// include database configuration file
include 'Configuracion.php';

// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index2.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM usuario WHERE usuario= ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagos -  Carrito de compras </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 20px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>
<body>
<div class="container" style="background: linear-gradient(to right, rgb(48, 255, 134), rgb(160, 205, 235))">
<div class="panel panel-default" style="background: linear-gradient(to right, rgb(48, 255, 134), rgb(160, 205, 235))">
<div class="panel-heading" style="background: linear-gradient(to right, rgb(48, 255, 134), rgb(160, 205, 235))"> 

<ul class="nav nav-pills" >
  <li role="presentation"><a href="index2.php">Inicio</a></li>
  <li role="presentation"><a href="VerCarta.php">Ver Carta</a></li>
  <li role="presentation" class="active"><a href="Pagos.php">Pagos</a></li>
</ul>
</div>

<div class="panel-body">
    <h1>Vista previa de la Orden</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Pricio</th>
            <th>Cantidad</th>
            <th>Sub total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' USD'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No hay articulos en tu carta......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Detalles de envío</h4>
        <p><?php echo $custRow['usuario']; ?></p>
        <p><?php echo $custRow['nombre']; ?></p>
        <p><?php echo $custRow['correo_e']; ?></p>
    
    </div>
    
 
    <div class="footBtn">
        <a href="index2.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a>
        <a href="AccionCarta.php?action=placeOrder" class="btn btn-success orderBtn">Realizar pedido <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
   <a href="assets/data/paypal.php"> <img src="https://www.paypalobjects.com/marketing/web/mx/logos-buttons/Paga-con-yellow_227x44.png" alt="Check out with PayPal" style="float:right;" /></a>
        </div>
        
 <div class="panel-footer">IPHONEWORDL</div>
 </div><!--Panek cierra-->
</div>
</body>
</html>