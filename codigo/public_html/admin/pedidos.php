<?php require '../funciones/bd_conexion.php';;
include 'cabecera.inc';?>

<br><br><br><br><br>
<div class="contenedor">
<p><h3><a href="index.php"> Menu de Admin. / </a> <a href="pedidos.php">Pedidos / </a></h3><p>
</div>
<div class="contenedor">
<div class="contenido">

<?php

$peticion = "SELECT pedidos.idpedido AS idpedido,fecha,estado,nombre,apellido_pat,apellido_mat FROM pedidos LEFT JOIN usuarios ON pedidos.id_usuario= usuarios.idusuario ORDER BY estado,fecha ASC";
$resultado = mysqli_query($conexion, $peticion);
while($fila = mysqli_fetch_array($resultado)) {
$estado = $fila['estado'];
echo "<div class=existentes>
	<th>";
	echo '<article>';
//if($estado == 0){$diestado = "no servido";}else{$diestado = "servido";}
switch($estado){
	case 0:$diestado = "no servido";break;
	case 1:$diestado = "servido";break;
	case 2:$diestado = "anulado";break;
}


//if($estado == 0){echo ' style="background:rgb(255,200,200);"';}else{echo ' style="background:rgb(200,255,200);"';}
switch($estado){
	case 0:echo '<style="background-color:#fb5252";>';break;
	case 1:echo '<style="background:rgb(200,255,200)";>';break;
	case 2:echo '<style="background:rgb(255,255,200)";>';break;
}

	echo'<td>'.$fila['nombre']." ".$fila['apellido_pat'] .$fila['apellido_mat'].'</p></td>
	<td><p>'.$fila['fecha'].'</p></td>
	<td><p>'.$diestado.'</p></td>
	<td><p><a href="gestionpedido.php?id='.$fila['idpedido'].'"><button>Gestionar</button></a></p></td>
	<td><p><a href="pedidoservido.php?id='.$fila['idpedido'].'"><button>Pedido servido</button></a></p></td>
	<td><p><a href="cancelarpedido.php?id='.$fila['idpedido'].'"><button>Cancelar pedido</button></a></p></td>';
	echo '</article></th></div><br>';
}


mysqli_close($conexion);
?>
</div>

</div>

