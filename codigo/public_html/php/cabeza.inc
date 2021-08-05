<?php
session_start();
if(!isset($_SESSION['contador'])){
  $_SESSION['contador'] = 0;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <link rel="stylesheet" href="../css/estilo.css">
  <link rel="stylesheet" href="../static/css/booststrap.css">
  <title>Catalogo</title>
    <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/codigo.js"></script>
  </head>
<body>
<section>



  <div class="top">
  <header role="banner">
     <div class="logo-contenedor">
       <img src="img/logo-aguila.jpg" alt="logo-aguila" class="logo" id="logo">
         <a href="repaso1.html"></a>
         <nav class="navegacion" role="navigation">
         <ul>
           <li><a  href="catalogo.php"> Catalogo</a></li>
           <li><a  href="inicio.html"> inicio</a></li>
        </li>
             <li><a  href="login.php"> Login </a></li>

         </ul>
         </nav>
         </header>
         </div>
       </div>

</section>

<section>


       <div class="carrito">



       			<div id="carrito" style="background:rgb(200,200,200);color:black;">

       			Carrito
       			</div>
       			<a href='destruir.php'><button>Vaciar carrito</button></a>
       			<a href="../confirmar.php"><button>Confirmar compra</button></a>
       			</div>
</section>
