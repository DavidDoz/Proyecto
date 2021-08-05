<?php
  if(isset($_GET['id'])){
    $idmat= $_GET['id'];
  }
try {
require_once('funciones/bd_conexion.php');
$sql="DELETE FROM `productos` WHERE `id`='{$idmat}'; ";
$resultado =$conexion->query($sql);
} catch(Exception $e){
    $error=$e->getMessage();
  }

  require 'cabecera.inc';
 ?>


  <div class="contenedor">

    <img id="logo2" src="img/logo-aguila.jpg">
      <h1 id="saludo">productos existentes</h1> <br><br>
      <div class="contenido">

        <?php
          if($resultado){
            echo "producto borrado";
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
