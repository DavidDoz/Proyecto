<br><br><br><br><br>
<div class="contenedor">
<p><h3><a href="index.php"> Menu de Admin.</a>/<a href="pedidos.php">Pedidos</a>/  Gestionar pedido</h3><p>
</div>
<?php

 require '../funciones/bd_conexion.php';
include "cabecera.inc";

echo "<div class='contenedor'>";

$peticion = "SELECT * FROM pedidos WHERE idpedido =".$_GET['id']."";
$resultado = mysqli_query($conexion,$peticion);
while($fila = mysqli_fetch_array($resultado)){

  $p2 = "SELECT * FROM usuarios WHERE idusuario =".$fila['id_usuario']."";
  $resultado2 = mysqli_query($conexion,$p2);
  while($fila2 = mysqli_fetch_array($resultado2)){
echo "<table border=1>datos del cliente";
echo "<thead>
  <tr><th>nombre</th><th>apellido paterno</th><th>materno</th><th>sexo</th><th>fecha de nacimiento</th>
  <th>email</th><th>telefono</th><th>direccion</th></tr>";
  echo "</thead><tbody>";
		echo "<td><p>".$fila2['nombre']."</p></td>";
    echo "<td><p>".$fila2['apellido_pat']."</p></td>";
		echo "<td><p>".$fila2['apellido_mat']."</p></td>";
		echo "<td><p>".$fila2['sexo']."</p></td>";
		echo "<td><p>".$fila2['fecha_nac']."</p></td>";
		echo "<td><p>".$fila2['email']."</p></td>";
		echo "<td><p>".$fila2['telefono']."</p></td>";
		echo "<td><p>".$fila2['direccion']."</p></td>";
echo "</tbody></table><br>";


}
  $p0 = "SELECT * FROM lineaspedido WHERE id_pedido = ".$fila['idpedido']."";
  $resultado0 = mysqli_query($conexion,$p0);
  if ($resultado0) {

  }
  while($fila0 = mysqli_fetch_array($resultado0)){


    $p1 ="SELECT * FROM productos WHERE id = ".$fila0['id_producto']."";
    $resultado1 = mysqli_query($conexion,$p1);
    if ($resultado1) {

    }
    while($fila1 = mysqli_fetch_array($resultado1)){

echo "<table border=1> Datos del producto comprado";
echo "<thead><tr><th>nombre</th><th>marca</th><th>categoria</th><th>precio</th><th>cantidad</th></tr>";
  echo "</thead><tbody>";
  echo "<td><p>".$fila1['nombre']."</p></td>";
echo "<td><p>".$fila1['marca']."</p></td>";
echo "<td><p>".$fila1['categoria']."</p></td>";
echo "<td><p>".$fila1['precio']."</p></td>";
  echo "<td><p>".$fila0['unidades']."</p></td>";
  echo "</tbody></table><br>";

}
}
}

?>

</div>
