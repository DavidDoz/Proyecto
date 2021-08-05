<?php
  if(isset($_GET['id'])){
    $id=$_GET['id'];
  }
try {
require_once('funciones/bd_conexion.php');
$sql="SELECT * FROM `productos` WHERE `id`={$id}";
$resultado=$conexion->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }

  require 'cabecera.inc';
 ?>

<br><br><br><br><br>
<div class="contenedor">
<p><h3><a href="../index.php"> Menu de Admin.</a>/<a href="agregarmat.php">Agregar material /</a>  Editar un material</h3><p>
</div>
  <div class="contenedor">

    <img id="logo2" src="img/logo-aguila.jpg">
      <h1 id="saludo">articulos agregados</h1> <br><br>
      <div class="contenido">
      <h2>Editar Articulos</h2><br>
      <form  action="actualizar.php" method="get">
        <?php while($registro=$resultado->fetch_assoc()) { ?>
        <div class="campo">
          <label for="nombre">Nombre: </label>
            <input type="text" value="<?php echo $registro['nombre']; ?>" name="nombre" id="nombre" placeholder="Nombre">
        </div>
        <div class="campo">
          <label for="marca">Marca: </label>
            <input type="text" value="<?php echo $registro['marca']; ?>" name="marca" id="marca" placeholder="Marca">
        </div>
        <div class="campo">
          <label for="categoria">Categoria: </label>
            <!--<input type="text" name="categoria" id="categoria" placeholder="Categoria">-->
            <select id="categoria" name="categoria" value="<?php echo $registro['categoria']; ?>" placeholder="Categoria" >
              <option value="materiales" >material</option>
              <option value="herraminetas">herramienta</option>
              </select>
        </div>
        <div class="campo">
          <label for="precio">Precio: </label>
            <input type="number" name="precio" value="<?php echo $registro['precio']; ?>" id="precio" placeholder="precio">
        </div>
        <div class="campo">
          <label for="peso">peso: </label>
            <input type="number" name="peso" value="<?php echo $registro['peso']; ?>" id="precio" placeholder="peso en kg">
        </div>
        <div class="campo">
          <label for="long">longitud: </label>
            <input type="number" name="long" value="<?php echo $registro['long']; ?>" id="long" placeholder="longitud en cm">
        </div>
        <div class="campo">
          <label for="anch">anchura: </label>
            <input type="number" name="anch" value="<?php echo $registro['anch']; ?>" id="anch" placeholder="ancho en cm">
        </div>
        <div class="campo">
          <label for="altura">altura: </label>
            <input type="number" name="altura" value="<?php echo $registro['altura']; ?>" id="alt" placeholder="altura en cm ">
        </div>
        <div class="campo">
          <label for="exis">existencias: </label>
            <input type="number" name="exis" value="<?php echo $registro['exis']; ?>" id="exis" placeholder="productos existentes">
        </div>
        <div class="campo">
          <label for="act">el produto esta activado?: </label>
          <select  name="act" value="<?php echo $registro['act']; ?>">>
            <option value="1">si</option>
            <option value="0">no</option>
          </select>
        </div>
         <br>
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
