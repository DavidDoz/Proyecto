<?php
if(isset($_GET['id'])){
  $idmat = $_GET['id'];
}
  if(isset($_POST['nombre'])){
    $nombre= $_POST['nombre'];
  }
  if(isset($_POST['marca'])){
    $marca= $_POST['marca'];
    }
  if(isset($_POST['categoria'])){
    $categoria= $_POST['categoria'];
    }
  if(isset($_POST['precio'])){
    $precio= $_POST['precio'];
  }
  if(isset($_POST['peso'])){
    $peso= $_POST['peso'];
  }
  if(isset($_POST['long'])){
    $long= $_POST['long'];
  }
  if(isset($_POST['anch'])){
    $anch= $_POST['anch'];
  }
  if(isset($_POST['altura'])){
    $alt= $_POST['altura'];
  }
  if(isset($_POST['exis'])){
    $exis= $_POST['exis'];
  }
  if(isset($_POST['act'])){
    $act= $_POST['act'];
  }
try {
require_once('funciones/bd_conexion.php');
$sql= "insert into `productos` (`id`, `nombre`, `marca`,`categoria`,`precio`,`peso`,`longitud`,`anchura`,`altura`,`existencias`,`activado` ) ";
$sql.="values (null, '{$nombre}', '$marca' , '$categoria','$precio','$peso','$long','$anch','$alt','$exis','$act'); ";
$resultado=$conexion->query($sql);
} catch(Exception $e){
    $error=$e->getMessage();
  }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <link rel="stylesheet" href="css/estilo.css">
  <title>productos guardados</title>
  </head>
<body>
  <div class="top">


 <header role="banner">
   <div class="logo-contenedor">
     <img src="img/logo-aguila.jpg" alt="logo-aguila" class="logo" id="logo">
       <a href="repaso1.html"></a>
       <nav class="navegacion" role="navigation">
         <ul>
         <li><a style="color:black" href="../agregarmat/agrrgarmat.php">agregar materiales</a></li>
         </ul>
       </nav>
       </header>
   </div>

  <div class="contenedor">

    <img id="logo2" src="img/logo-aguila.jpg">
      <h1 id="saludo">productos</h1> <br><br>
      <div class="contenido">

        <?php
          if($resultado){
            echo "producto Agregado";
          } else {
            echo "Error".$conexion->error;
          }
        ?>
        <br><br>
        <a class="volver" href="agregarmat.php" >Regresar a Principal</a>


      </div>
    </div>
    <?php
      $conexion->close();
     ?>
</body>
</html>
