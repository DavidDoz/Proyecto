<?php
  if(isset($_GET['id'])){
    $id=$_GET['id'];
  }
try {
require_once('funciones/bd_conexion.php');
$sql="SELECT * FROM `imagenesprod` WHERE `id`={$id}";
$resultado=$conexion->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }


 ?>

<?php include '../admin/cabecera.php' ?>
  <div class="contenedor">

    <img id="logo2" src="img/logo-aguila.jpg">
      <h1 id="saludo">imagenes agregadas</h1> <br><br>
      <div class="contenido">
      <h2>Editar Articulos</h2><br>
      <form  action="actualizar.php" method="get">
        <?php while($registro=$resultado->fetch_assoc()) { ?>
          <div class="campo">
          <label for="idproducto">id del producto al que pertenece</label>
          <input type="number" name="idpro" id="idpro" value="<?php echo $registro['idpro'] ?>">
      </div>
          <br><br>
          <div class="campo">


      <label for="imagen">nombre de la imagen</label>
      <input type="text" name="nimg" id=nimg value="<?php echo $registro['nimg']; ?>">

      </div>
      <br><br>
           <div class="campo">
          <label for="descripcion">descripcion de la imagen</label>
          <input type="text" name="descrip" id="descripcion" value="<?php echo $registro['descrip'] ?>">
      </div>
          <br><br>
        
        <input type="hidden" name="id" value="<?php echo $registro['id']; ?>">
        <input type="submit"  value=" Actualizar ">
      <?php } ?>
      </form>

      </div>

    </div>
<?php
$conexion->close;
 ?>
</body>
</html>
