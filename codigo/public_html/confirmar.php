<br><br><br><br><br>
<div class="contenedor">
<p><h3><a href="catalogo.php"> Catalogo</a> / confirmcion de compra</h2></p>
<?php include "cabeza1.inc" ;
require "funciones/bd_conexion.php";?>


<div class="contenedor">
inicie sesion y oprima enviar para confirmar su compra <br>
¿Ya eres usuario?<br>
<form action="php/logcliente.php" method="POST">

	<input type="text" name="usuario" placeholder="Introduce tu usuario">
	<input type="password" name="password" placeholder="Introduce tu contraseña">
	<input type="submit">

</form>
¿Eres nuevo usuario?<br> <a href="registrate.php" color: black;>registrate!!</a>
</div>
</div>
