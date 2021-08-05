<?php include "config.inc";
require "../funciones/bd_conexion.php"; ?>
<?php

include "cabeza.inc";

$contador = 0;


$peticion = "SELECT * FROM usuarios WHERE usuario  ='".$_POST['usuario']."' AND password = '".$_POST['password']."'";
$resultado = mysqli_query($conexion, $peticion);
while($fila = mysqli_fetch_array($resultado)) {
	$contador++;
	$fila['idusuario'];
}
if($contador > 0){
	$peticion = "SELECT *FROM productos ";
	$resultado = mysqli_query($conexion, $peticion);
	while($fila1 = mysqli_fetch_array($resultado)) {
	$peticion = "INSERT INTO pedidos VALUES (NULL,".$_SESSION['usuario'].",'".date("d-m-Y")."','0')";
	$resultado = mysqli_query($conexion, $peticion);
	

	$peticion = "SELECT * FROM pedidos WHERE id_usuario = '".$_SESSION['usuario']."' ORDER BY fecha DESC LIMIT 1";
	$resultado = mysqli_query($conexion, $peticion);
	while($fila2 = mysqli_fetch_array($resultado)) {



	echo $_SESSION['usuario'];

	for($i = 0;$i< $_SESSION['contador'];$i++){
    $peticion3 = "INSERT INTO lineaspedido (`id_li`,`id_pedido`,`id_producto`,`unidades`)";
		$peticion3.= "VALUES (NULL,".$fila2['idpedido'].",".$fila1[id].",1)";
		$resultado = mysqli_query($conexion, $peticion3);

		$peticion = "SELECT * FROM productos WHERE id='".$_SESSION['producto'][$i]."'";
		$resultado = mysqli_query($conexion, $peticion);
		while($fila = mysqli_fetch_array($resultado)) {
			$existencias = $fila['existencias'];
			$peticiondos = "UPDATE productos SET existencias = '".($existencias-1)."' WHERE idproducto='".$_SESSION['producto'][$i]."'";
			$resultadodos = mysqli_query($conexion, $peticiondos);
			}
		}

	}
	}





	echo "<br>Tu pedido se ha realizado satisfactoriamente. Redirigiendo a la página principal en 5 segundos...";
	session_destroy();
	echo '
		<meta http-equiv="refresh" content="5; url=../catalogo.php">
	';




}else{
	echo "El usuario no existe. Volviendo a la tienda en 5 segundos...";
	echo '
		<meta http-equiv="refresh" content="5; url=../confirmar.php">
	';
}

mysqli_close($conexion);
?>
