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
$sql= "insert into `imagenesprod` (`id`, `idproducto`, `imagen`,`descripcion`) ";
$sql.="values (null, '{$idpro}', '$nombre' , '$descrip'); ";
$resultado=$conexion->query($sql);
} catch(Exception $e){
    $error=$e->getMessage();
  }


 ?>


<?php include 'cabecera.inc' ?>
  <div class="contenedor">

    <img id="logo2" src="img/logo-aguila.jpg">
      <h1 id="saludo">imagenes</h1> <br><br>
      <div class="contenido">

        <?php
          if($resultado){
            echo "imagen agregada";
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
