<?php require '../funciones/bd_conexion.php';?>
<?php include 'cabecera.inc'?>
<br><br><br><br><br>
<div class="contenedor">
<p><h3><a href="index.php"> Menu de Admin.</a>/<a href="anaderep.php">Agregar reparto</a></h3><p>
</div>
<?php try {
require_once('../funciones/bd_conexion.php');
$sql='SELECT * FROM repartos';
$resultado=$conexion->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }
 ?>
 <br><br><br><br><br>
<div class="contenedor">

    <img id="logo2" src="img/logo-aguila.jpg">
      <h2 id="saludo">agregar reparto</h2> 
      <br><br>
      <div class="contenido">
      <h2>Agregar repartos</h2><br>
      <form  action="adreparto.php" method="post">

    <div class="campo">
    <label for="idrep">id repartidor a agregar</label>
    <input type="number" name="id_rep" id="id_rep">
</div>
    <br><br>
    <div class="campo">


<label for="idpedi">id del pedido</label>
<input type="number" name="id_pedido" id="id_pedido">

</div>
<br><br>
   


    <input type="submit" name="enviar" value="agregar">
    <input type="reset" name="reset" value="borrar">


  </div>

</div>
