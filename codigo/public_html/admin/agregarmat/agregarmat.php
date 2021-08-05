<?php
try {
require_once('../../funciones/bd_conexion.php');
$sql='SELECT * FROM productos';
$resultado=$conexion->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }

require 'cabecera.inc';
 ?>
<br><br><br><br><br>
<div class="contenedor">
<p><h3><a href="../index.php"> Menu de Admin.</a>/<a href="agregarmat.php">Agregar material</a></h3><p>
</div>

<div class="contenedor">
<div class="contenido">
      <img id="logo2" src="img/logo-aguila.jpg">
      <h1 id="saludo">productos Existentes</h1> <br><br>
      <div class="contenido">
      <h2>Agregar productos</h2><br>
      <form  action="crear.php" method="post" enctype="multipart/form-data">

              <div class="campo">
          <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        </div>
        <div class="campo">
          <label for="marca">Marca: </label>
            <input type="text" name="marca" id="marca" placeholder="Marca">
        </div>
        <div class="campo">
          <label for="categoria">Categoria: </label>
            <!--<input type="text" name="categoria" id="categoria" placeholder="Categoria">-->
            <select id="categoria" name="categoria"  placeholder="Categoria" >
              <option value="materiales" >material</option>
              <option value="herraminetas">herramienta</option>
              </select>
        </div>
        <div class="campo">
          <label for="precio">Precio: </label>
            <input type="number" name="precio" id="precio" placeholder="precio">
        </div>
        <div class="campo">
          <label for="peso">peso: </label>
            <input type="number" name="peso" id="peso" placeholder="peso en kg">
        </div>
        <div class="campo">
          <label for="long">longitud: </label>
            <input type="number" name="long" id="long" placeholder="longitud en cm">
        </div>
        <div class="campo">
          <label for="anch">anchura: </label>
            <input type="number" name="anch" id="anch" placeholder="ancho en cm">
        </div>
        <div class="campo">
          <label for="altura">altura: </label>
            <input type="number" name="altura" id="alt" placeholder="altura en cm ">
        </div>
        <div class="campo">
          <label for="exis">existencias: </label>
            <input type="number" name="exis" id="exis" placeholder="productos existentes">
        </div>
        <div class="campo">
          <label for="act">el produto esta activado?: </label>
          <select  name="act">
            <option value="1">si</option>
            <option value="0">no</option>
          </select>
        </div>
         <br>
        <input type="submit"  value=" Agregar ">
      </form>
</div>
</div>
      </div>
      <div class="contenido existentes">
        <h2>Articulos Existentes</h2>
        <p>
          Número de articulos: <?php echo $resultado->num_rows; ?>
        </p>
        <table>
          <thead>
            <tr>
              <th>imagen</th>
              <th>nobre</th>
              <th>marca</th>
              <th>categoria</th>
              <th>precio</th>
              <th>peso(kg)</th>
              <th>longitud(cm)</th>
              <th>ancho(cm)</th>
              <th>altura(cm)</th>
              <th>esistencias</th>
              <th>activado</th>
              <th>Editar</th>
              <th>Borrar</th>
            </tr>
          </thead>
          <tbody>
            <?php while($registro=$resultado->fetch_assoc()) {
              $p2 = "SELECT * FROM imagenesprod WHERE idproducto =".$registro['id'];
              $resultado2 = mysqli_query($conexion,$p2);
              while($fila2 = mysqli_fetch_array($resultado2)){ ?>
              <tr>
                <td><?php echo "<img src ='../../photo/".$fila2['imagen']."'width=50px>"; ?> </td>
                <td><?php echo $registro['nombre']; ?> </td>
                <td><?php echo $registro['marca']; ?> </td>
                <td><?php echo $registro['categoria']; ?> </td>
                <td><?php echo $registro['precio']; ?> </td>
                <td><?php echo $registro['peso']; ?> </td>
                <td><?php echo $registro['longitud']; ?> </td>
                <td><?php echo $registro['anchura']; ?> </td>
                <td><?php echo $registro['altura']; ?> </td>
                <td><?php echo $registro['existencias']; ?> </td>
                <td><?php echo $registro['activado']; ?> </td>
               <td class="editar">
                  <a href="editar.php?id=<?php echo $registro['id']; ?>">Editar</a>
                </td>
                <td class="borrar">
                  <a href="borrar.php?id=<?php echo $registro['id']; ?>">Borrar</a>
                </td>
              </tr>
            <?php
          }  } ?>
          </tbody>
        </table>


      </div>
    </div>
<?php
$conexion->close;
 ?>
</body>
</html>
