
<?php      include 'cabecera.inc'?>

<?php try {
require_once('funciones/bd_conexion.php');
$sql='SELECT * FROM imagenesprod';
$resultado=$conexion->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }
 ?>
 <br><br><br><br><br>
<div class="contenedor">
<p><h3><a href="../index.php"> Menu de Admin.</a>/<a href="agregarmat.php">Agregar imagen del material</a></h3><p>
</div>
<div class="contenedor">
    <img id="logo2" src="img/logo-aguila.jpg">
      <h1 id="saludo">imagenes de productos</h1> <br><br>
      <div class="contenido">
      <h2>Agregar imagenes productos</h2><br>
      <form  action="crear.php" method="post">

    <div class="campo">
    <label for="idproducto">id del producto al que pertenece</label>
    <input type="number" name="idpro" id="idpro">
</div>
    <br><br>
    <div class="campo">


<label for="imagen">nombre de la imagen</label>
<input type="text" name="nimg" id=nimg>

</div>
<br><br>
     <div class="campo">
    <label for="descripcion">descripcion de la imagen</label>
    <input type="text" name="descrip" id="descripcion">
</div>
    <br><br>

    <input type="submit" name="enviar" value="agregar">
    <input type="reset" name="reset" value="borrar">


  </div>

</div>
