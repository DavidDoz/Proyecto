<!DOCTYPE html>
	<html lang="en">
	<head>
	 <title>Registrar Usuario</title>
	 <meta charset = "utf-8">
	 <link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>

   <div class="top">
  <header role="banner">
    <div class="logo-contenedor">
      <img src="img/logo-aguila.jpg" alt="logo-aguila" class="logo" id="logo">
        <a href="repaso1.html"></a>
      <h1>Tlapaleria el Aguila</h1>
        </header>
    </div>

	 <form action="registrar-usuario.php" method="post">


					 <div class="inisecion">
		        <div class="Login">
		         <blockquote >
		           Registrate
		         </blockquote>
		         <fieldset>
		         <label for="nombre">Nombre</label>
		         <input type="text" name="nombre" id="nombre" placeholder="Tu(s) nombre(s)" autocomplete="off" required>
		         <br><br>
						 <label for="apellido_mat">Apellido paterno</label>
						 <input type="text" name="apellido_pat" id="apellidos" placeholder="Apellido paterno" autocomplete="off" required>
             <br><br>
						 <label for="apellido_mat">Apellido materno</label>
						<input type="text" name="apellido_mat" id="apellidos" placeholder="Apellido materno" autocomplete="off" required>
						 <br><br>
						 <label for="sexos">sexo</label>
						 <input type="radio" name="sexo" id="sexo"
					   value="Hombre" checked><span>  Hombre</span>
						 <input type="radio" name="sexo" id="sexo"
					   value="Mujer" ><span> Mujer</span>
					   <input type="radio" name="sexo" id="sexo"
					   value="Otro" ><span> Otro </span>
						 <br>
						 <br>
					   <label for="fnac">Fecha de nacimieto:</label>
					   <input type="date" name="fecha" id="fnac">
						 <br><br>
             <label for="E-mail">E-mail</label>
							<input type="email" name="email" id="email" placeholder="corre@dominio.com" autocomplete="on" required>
							<br><br>
							<label for="usuario">nombre de usuario</label>
 							<input type="text" name="usuario" id="usuario" placeholder="ingresa un nombre de usuario" autocomplete="off" required>
 							<br><br>
						 <label for="password">contraseña</label>
		         <input type="password" name="password" id="contraseña" placeholder="Contraseña(max 10 caracteres)" autocomplete="off" maxlength="10"required >
		         <br><br>
						 <label for="telefono">Telefono</label>
						 <input type="text" name="telefono" id="telefono" placeholder="Numero telefonico">
						 <br><br>
						 <label for="direccion">direccion</label>
			       <input type="text" name="direccion" id="direccion" placeholder="Tu direccion">
						 <br><br>
		         <input type="submit" name="submit" value="Registrarme" id ="boton">
						 <input type="reset" name="clear" value="Borrar" id="boton">
		         </fieldset>
						 <br>
						 <a href="catalogo.php" color: black;>!ya estoy regsitrado llevame al catalogo¡</a>
		    </div>
		     </div>
   	 </form>

	<footer>
	</footer>
	 </body>
	</html>
