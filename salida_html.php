<?php

include("funciones.php");

function cabecera()
{
	?>
	<!doctype html>
	<html lang="en">
	<head>
	<meta charset="utf-8" />
	<title>Usuarios</title>
	<link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	</head>
	<body>
	<div id="wrapper">
	<header>
	<div id="headerlogo"><img src="images/knotlogo.png" alt="" /></div>
	<h1><a href="#">Usuarios</a></h1>
	<h2>Ejemplo de Gestor de Usuarios y Contraseñas PHP</h2>
	</header>
<?php		
}

function idioma(){
	?>
	<div id="idioma">Elija su idioma:
	<form method="post" action="idiomaindex.php" >
		<input id="idioma1" type="submit" name="idioma" value="spanish">
		<input id="idioma2" type="submit" name="idioma" value="english">
	</form>
	</div>
	<?php
}

function estado()
{
	?>
	<nav>
	<div class="menu">
	<ul>
		<?php
		echo "<li>Ha iniciado sesión como: " . $_SESSION['perfil'] . " (" . $_SESSION['usuario'] . ")</li>";
		if ($_SESSION['perfil'] != 'Invitado'){
							echo "<li><a href='cerrarsesion.php'>Cerrar sesión</a></li>";
							}
							$fecha=date("d - m - y / H : i");
		echo "<li style='float:right; margin-right:5px; color: white'>" . $fecha . "</li>";
		?>
	</ul>
	</div>
	</nav>
<?php
}

function contenido()
{
	?>
	<section id="main">
		<section id="content">
			<article>
				<h2>Bienvenido</h2>
				Esta usted en una aplicación PHP realizada como muestra del uso de usuarios en PHP, en esta aplicación vera reflejado el registro de un usuario, las variables de sesión, las sesiones, includes, funciones para crear webs y mucho más<br><br>
			</article>
		</section>
	<?php
}

function contenidoLogin()
{
	?>
	<section id="main">
		<section id="content">
			<article>
				<?php form_login(); ?>
			</article>
		</section>
	<?php
}

function contenidoR()
{
	?>
	<section id="main">
		<section id="content">
			<article>
				<?php form_registro(); ?>
			</article>
		</section>
		<?php
}

function form_registro()
{
	?>
	<h2>Registro</h2>
	<img src="images/randomsymbol.png" class="alignleft" />
				<form method="post" action="registrarse.php">
					* Campos obligatorios
					<br><br>
					Nombre de usuario: <input type="text" pattern='[a-zd_]{4,15}' name="usuario" required>*
					<br><br>
					Contraseña: <input type="password" pattern='[a-zd_]{4,15}' name="password" required>*
					<br><br>
					Perfil:
					<select name="perfil">
						<option value="Administrador">Administrador</option>
						<option value="Redactor">Redactor</option>
						<option value="Editor">Editor</option>
					</select>
					<br><br>
					<input type="submit" name="enviar" value="Enviar">
					<br><br>
				</form>
	<?php
}

function form_login()
{
	?>
	<h2>Login</h2>
	<img src="images/randomsymbol.png" class="alignleft" />
				<form method="post" action="login.php">
					* Campos obligatorios
					<br><br>
					Nombre de usuario: <input type="text" pattern='[a-zd_]{4,15}' name="usuario" required>*
					<br><br>
					Contraseña: <input type="password" pattern='[a-zd_]{4,15}' name="password" required>*
					<br><br>
					<input type="submit" name="enviar" value="Enviar">
					<br><br>
				</form>
	<?php
}

function contenidoMensaje($mensaje,$url)
{
	echo '<section id="main">';
			echo '<section id="content">';
			
        		echo '<article>';
				echo '<h2>' . $mensaje . '</h2>';
				echo '<p><a href=' . $url . '>Volver</a></p>';
				echo '</article>';
						
	echo '</section>';
}

function acciones()
{
	echo '<aside id="sidebar">';
				echo '<h3>Acciones</h3>';
					echo '<ul>';
						if($_SESSION['perfil'] == 'Invitado'){
							echo '<li><a href="login.php">Login</a></li>';
							echo '<li><a href="registrarse.php">Registrarse</a></li>';
						}
						else if($_SESSION['perfil'] == 'Administrador'){
							echo '<li><a href="escribir.php">Escribir</a></li>';
							echo '<li><a href="publicar.php">Publicar</a></li>';
							echo '<li><a href="usuarios.php">Usuarios</a></li>';
						}
						else if($_SESSION['perfil'] == 'Redactor'){
							echo '<li><a href="escribir.php">Escribir</a></li>';
							echo '<li><a href="publicar.php">Publicar</a></li>';
						}
						else if($_SESSION['perfil'] == 'Editor'){
							echo '<li><a href="escribir.php">Escribir</a></li>';
						}
						
					echo '</ul>';

		echo '</aside>';

	echo '</section>';
}

function pie()
{
			echo '<footer>';
				echo '<section id="footer-area">';

					echo '<section id="footer-outer-block">';
							echo '<aside>';
									echo "<center><h4>Author: Miguel Angel López Torralba</h4></center>";
							echo '</aside>';

					echo '</section>';

				echo '</section>';
			echo '</footer>';
			
		echo '</div>';
		echo '</body>';
		echo '</html>';
}

?>