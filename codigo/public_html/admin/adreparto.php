<?php
if(isset($_GET['idr'])){
  $idr = $_GET['idr'];
}
if (isset($_POST['id_rep'])) {
  $id_rep= $_POST['id_rep'];
}
  if(isset($_POST['id_pedido'])){
    $id_pedido= $_POST['id_pedido'];
  }

try {
require_once('../funciones/bd_conexion.php');
$sql= "insert into `repartos` (`idr`, `id_rep`,`id_pedido`) ";
$sql.="values (null, '{$id_rep}', '$id_pedido'); ";
$resultado=$conexion->query($sql);
} catch(Exception $e){
    $error=$e->getMessage();
  }


 ?>


<?php include 'cabecera.inc' ?>
  <div class="contenedor">

    <img id="logo2" src="img/logo-aguila.jpg">
      <h1>repartos</h1> <br><br>
      <div class="contenido">

        <?php
          if($resultado){
            echo "reparto agregado";
          } else {
            echo "Error".$conexion->error;
          }
        ?>
        <br><br>
        <a class="volver" href="anaderep.php" >Regresar a Principal</a>


      </div>
    </div>
    <?php
      $conexion->close();
     ?>
</body>
</html>
