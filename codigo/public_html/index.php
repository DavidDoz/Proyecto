<?php include 'cabecera1.inc'; ?>
<?php include 'funciones/bd_conexion.php';?>
<br><br><br><br><br><br><br><br>
    <div class="contenedor">
       <div class="contenido">
  <form  action="login.php" method="post" >
          <blockquote >
          Inicio de sesion
        </blockquote>
        <label for="Usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" placeholder="Usuario" autocomplete="on" required>
        <br>
        <label for="Contraseña">contraseña</label>
        <input type="password" name="password" id="password" placeholder="Contraseña" autocomplete="off" required>
        <br><br>
        <input type="submit" value="Login">
      </aside>
      <br>
   ¿Eres nuevo usuario?<br> <a href="registrate.php" color: black;>registrate!!</a>
   </div>
    </div>
</body>
</html>
