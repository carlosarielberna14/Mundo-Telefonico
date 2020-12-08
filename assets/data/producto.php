<?php
include('conexion.php');

$obj =new Conexion;

$res = $obj->buscarProducto();

echo '<table>
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Descripcion</th>
<th>Precio Venta</th>
<th>Precio compra</th>
<th>Stock</th>
<th>Url imagen</th>
</tr>';
 foreach($res as $filas){
     echo'<tr>';
     echo'<td>'. $filas['id_producto'].'</td>';
     echo'<td>'. $filas['nombre_producto'].'</td>';
     echo'<td>'. $filas['descripcion_producto'].'</td>';
     echo'<td>'. $filas['precio_venta'].'</td>';
     echo'<td>'. $filas['precio_compra'].'</td>';
     echo'<td>'. $filas['stock'].'</td>';
     echo'<td>'. $filas['url_img'].'</td>';
 }
echo'</table>';
json_encode($res,JSON_FORCE_OBJECT);
print_r($res);
echo '<br><br><br>';

$temp=array();
$temp=$res;



print("Id producto:". $temp[0]['id_producto'].'<br>');
print("nombre:". $temp[0]['nombre_producto'].'<br>');
print("descripcion:". $temp[0]['descripcion_producto'].'<br>');


?>