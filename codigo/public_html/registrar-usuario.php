<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
}
  if(isset($_POST['nombre'])){
    $nombre= $_POST['nombre'];
  }
  if(isset($_POST['apellido_pat'])){
    $apellido_pat= $_POST['apellido_pat'];
    }
    if(isset($_POST['apellido_mat'])){
      $apellido_mat= $_POST['apellido_mat'];
      }
  if(isset($_POST['sexo'])){
    $sexo= $_POST['sexo'];
    }
  if(isset($_POST['fnac'])){
    $fecha_nac= $_POST['fnac'];
  }
  if(isset($_POST['email'])){
    $email= $_POST['email'];
  }
  if (isset($_POST['usuario'])) {
    $usuario= $_POST['usuario'];
  }
  if(isset($_POST['password'])){
    $password= $_POST['password'];
  }

  if(isset($_POST['telefono'])){
    $telefono= $_POST['telefono'];
  }
  if(isset($_POST['direccion'])){
    $direccion= $_POST['direccion'];
  }
try {
require_once('funciones/bd_conexion.php');
$sql= "insert into `usuarios` (`idusuario`,`id_rol`, `nombre`, `apellido_pat`,`apellido_mat`, `sexo`,`fecha_nac`,`email`,`usuario`,`password`,`telefono`,`direccion`) ";
$sql.="values (null,'2', '{$nombre}', '$apellido_pat','$apellido_mat','$sexo','$fecha_nac','$correo_electronico','$usuario','$password','$telefono','$direccion'); ";
$resultado =$conexion->query($sql);
} catch(Exception $e){
    $error=$e->getMessage();
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
      <link rel="stylesheet" href="css/estilo.css">
      <title>usuario registrado</title>
      </head>
    <body>
      <div class="top">


     <header role="banner">
       <div class="logo-contenedor">
         <img src="img/logo-aguila.jpg" alt="logo-aguila" class="logo" id="logo">
           <a href="repaso1.html"></a>
           <nav class="navegacion" role="navigation">
           <ul>
           <li><a style="color:black" href="login.html"> Login </a></li>
           <li><a style="color:black" href="#"> Catalogo</a></li>
           <li><a style="color:black" href="#"> Mi carrito</a></li>
     <li><a style="color:black" href="inicio.html"> inicio</a></li>
           </ul>
           </nav>
           </header>
       </div>

      <div class="contenedor">

        <img id="logo2" src="img/logo-aguila.jpg">
          <h1 id="saludo">Usuarios</h1> <br><br>
          <div class="contenido">

            <?php
              if($resultado){
                echo "Usuario Agregado";
              } else {
                echo "Error".$conexion->error;
              }
            ?>
            <br><br>
            <a class="volver" href="registrate.html" >Regresar a Principal</a>


          </div>
        </div>
        <?php
          $conexion->close();
         ?>
    </body>
    </html>
