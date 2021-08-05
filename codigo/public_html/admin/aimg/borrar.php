<?php
  if(isset($_GET['id'])){
    $id= $_GET['id'];
  }
try {
require_once('funciones/bd_conexion.php');
$sql="DELETE FROM `imagenesprod` WHERE `id`='{$id}'; ";
$resultado =$conectar->query($sql);
} catch(Exception $e){
    $error=$e->getMessage();
  }


 ?>

<?php include '../admin/cabecera.php' ?>
  <div class="contenedor">

    <img id="logo2" src="img/logo-aguila.jpg">
      <h1 id="saludo">productos existentes</h1> <br><br>
      <div class="contenido">

        <?php
          if($resultado){
            echo "imagen borrada";
          } else {
            echo "Error".$conexion->error;
          }
        ?>
        <br><br>
        <a class="volver" href="agregarimg.php" >Regresar a Principal</a>


      </div>
    </div>
    <?php
      $conexion->close();
     ?>
</body>
</html>
