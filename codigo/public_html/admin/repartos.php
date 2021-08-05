<?php  require '../funciones/bd_conexion.php';
include 'cabecera.inc'; ?>
<br><br><br><br><br><br><br><br>
<div class="contenedor">
<p><h3><a href="index.php"> Menu de Admin.</a>/<a href="repartos.php">Repartos</a>/ </h3><p>
</div>
<div class='contenedor'>
<div class="contenido">
<?php

$peticion = "SELECT idrep, nombre, apellido, numero_tel, idpedido, estado ,idr,id_rep, id_pedido FROM pedidos, repartidores,repartos where id_rep = idrep and idpedido = id_pedido and estado = 0";
 
$resultado = mysqli_query($conexion, $peticion);
while($fila = mysqli_fetch_array($resultado)) {
    $estado = $fila['estado'];
    
    switch($estado){
        case 0:$diestado = "no servido";break;
        case 1:$diestado = "servido";break;
        case 2:$diestado = "anulado";break;
    }
    switch($estado){
        case 0:echo '<style="background-color:#fb5252";>';break;
        case 1:echo '<style="background:rgb(200,255,200)";>';break;
        case 2:echo '<style="background:rgb(255,255,200)";>';break;
    }
    echo "<div class=existentes>";
    echo '<th>';
    echo '<article>';
    
   
    echo'<td><p>'.$fila['nombre'].'</td><td> </td><td>'.$fila['apellido'].'</p></td><td><p>'.$diestado.'</p></td><td><p><a href="gestionpedido.php?id='.$fila['idpedido'].'"><button>Gestionar</button></a></p></td><td><p><a href="pedidoservido.php?id='.$fila['idpedido'].'"><button>Pedido servido</button></a></p></td>';  

echo'</article></th></div><br>';
}
mysqli_close($conexion);
?>
<br>

</div>
</div>