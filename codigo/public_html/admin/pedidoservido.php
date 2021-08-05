<?php require '../funciones/bd_conexion.php'; ?>
<?php

	

	$peticion = "UPDATE pedidos SET estado = 1 WHERE idpedido ='".$_GET['id']."'";
	$resultado = mysqli_query($conexion, $peticion);

mysqli_close($conexion);
?>
<script>
window.alert("el pedido fue servido");

	window.location = "pedidos.php";
</script>
