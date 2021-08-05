<?php include 'php/config.inc' ?>
<br><br><br><br><br>
<div class="contenedor">
<p><a href="catalogo.php"> Catalogo / </a><p>
<?php include "cabeza1.inc" ?>
<div class="contenedor">
<div class="contenido">


<?php
require 'funciones/bd_conexion.php';
$peticion = "SELECT * FROM productos";
$resultado = mysqli_query($conexion,$peticion);
while($fila = mysqli_fetch_array($resultado)){
echo "<div class=existentes>
<th>";
  echo "<td><article></td>";
  echo "<td> <h3>Nombre prducto".$fila['nombre']."</h3></td>";
  $p2 = "SELECT * FROM imagenesprod WHERE idproducto =".$fila['id'];
  $resultado2 = mysqli_query($conexion,$p2);
  while($fila2 = mysqli_fetch_array($resultado2)){
  echo "<td><p>Imagen previa</p><br><img src ='photo/".$fila2['imagen']."'width=200px></td>";
  echo "<td><p>Marca: ".$fila['marca']."</p></td>";
  echo "<td><p>Categoria:".$fila['categoria']."</p></td>";
  echo "<td><p>precio:".$fila['precio']." $</p></td>";


}
echo "<a href='producto.php?id=".$fila['id']."'><button>Mas informacion</button></a>";
echo "<button value='".$fila['id']."' class='botoncompra'>comprar ahora</button>";
echo "</article></th></div><br>";
}
?>
<?php
$conexion->close;
?>


</div>
</div>
<?php include "php/piedepagina.inc" ?>
