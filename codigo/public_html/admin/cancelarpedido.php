<?php require '../funciones/bd_conexion.php';?>
<?php
if(isset($_GET['id_pedido'])){
  $idpedido = $_GET['id_pedido'];
}
try {
	$conexion = mysqli_connect($server,$user,$pass,$bd);
	mysqli_set_charset($conexion, "utf8");
	$peticion = "UPDATE pedidos SET estado = 2 WHERE idpedido ='".$_GET['id']."'";
	$resultado = mysqli_query($conexion, $peticion);
} catch (Exception $e) {
$error=$e->getMessage();

}

mysqli_close($conexion);
?>
<script>
window.alert("el pedido fue cancelado");
	window.location = "pedidos.php";
</script>
