<?php

if(isset($_GET['id'])){
  $id = $_GET['id'];
}
if (isset($_POST['idpro'])) {
  $idpro= $_POST['idpro'];
}
  if(isset($_POST['nimg'])){
    $nombre= $_POST['nimg'];
  }
  if (isset($_POST['descrip'])) {
   $descrip= $_POST['descrip'];
  }

try {
require_once('funciones/bd_conexion.php');
$sql = "UPDATE `imagenesprod` SET ";
$sql .= "`idpro` = '{$idpro}', ";
$sql .= "`nimg` = '{$nombre}', ";
$sql .= "`descrip` = '{$descrip}', ";
$sql .= "WHERE `id` = '{$id}'";
$resultado =$conexion->query($sql);
} catch(Exception $e){
    $error=$e->getMessage();
  }

 ?>
<?php include '../admin/cabecera.php' ?>
  <div class="contenedor">

    <img id="logo2" src="img/logo-aguila.jpg">
      <h1 id="saludo">imagenes guardadas</h1> <br><br>
      <div class="contenido">

        <?php
          if($resultado === TRUE){
            echo "imagen Actualizada";
          } else {
            echo "Error".$conexion->error;
          }
        ?>
        <br><br>
        <a class="volver" href="agregaramg.php" >Regresar a Principal</a>


      </div>
    </div>
    <?php
      $conexion->close();
     ?>
</body>
</html>
