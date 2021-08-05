<?php include "php/config.inc" ?>
<br><br><br><br><br>
<div class="contenedor">
<p><h3><a href="catalogo.php"> Catalogo</a> / producto</h2></p>
<?php include "cabeza1.inc"?>
<div class="contenedor">
  <div class="contenido">


<?php
require 'funciones/bd_conexion.php';
$peticion = "SELECT * FROM productos WHERE id =".$_GET['id']."";
$resultado = mysqli_query($conexion,$peticion);
while($fila = mysqli_fetch_array($resultado)){
  echo "<article>";
  echo "<h3>Nombre producto: ".$fila['nombre']."</h3>";
  echo "<p>Marca producto: ".$fila['marca']."</p>";
  echo "<p>Categoria: ".$fila['categoria']."</p>";
  echo "<p>precio:".$fila['precio']." $</p>";
  $p2 = "SELECT * FROM imagenesprod WHERE idproducto =".$fila['id'];
  $resultado2 = mysqli_query($conexion,$p2);
  while($fila2 = mysqli_fetch_array($resultado2)){
    echo "<p>Imagen previa</p><img src ='photo/".$fila2['imagen']."'width=200px>";
  }
  echo "<br>";
  echo "<a href='producto.php?id=".$fila['id']."'><button>Mas informacion</button></a>";
echo "<button value='".$fila['id']."' class='botoncompra'>comprar ahora</button>";
  echo "</article>";
}
?>
</div>
</div>
<?php
$conectar->close;
?>
<?php include "php/piedepagina.inc" ?>
