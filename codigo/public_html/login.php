<?php
include "funciones/bd_conexion.php";
$contador = 0;
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT * FROM usuarios WHERE usuario  ='".$_POST['usuario']."' AND password = '".$_POST['password']."'";
$resultado = mysqli_query($conexion, $peticion);
  if($resultado > 0) {
    $data = mysqli_fetch_array($resultado);
    $_SESSION['rol'] = $data['id_rol'];
    $_SESSION['id'] = $data['id'];
    switch($data['id_rol']){
      case 2:
      header('location: catalogo.php');
      break;
      case 1:
      header('location: admin/');
      break;
      default:
      break;
    }
  }else{
    echo "El usuario o contraseña son incorrectos";
  }
?>
