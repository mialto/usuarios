<?php

include("funciones.php");

function cabeceraEN()
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
	<h1><a href="#">Users</a></h1>
	<h2>Passwords, Users controls and lenguages example in PHP</h2>
	</header>
<?php		
}

function idioma(){
	?>
	<div id="idioma">Choose your lenguage:
	<form method="post" action="idiomaindex.php" >
		<input id="idioma1" type="submit" name="idioma" value="spanish">
		<input id="idioma2" type="submit" name="idioma" value="english">
	</form>
	</div>
	<?php
}


function estadoEN()
{
	?>
	<nav>
	<div class="menu">
	<ul>
		<?php
		echo "<li>You open de session as: " . $_SESSION['perfil'] . " (" . $_SESSION['usuario'] . ")</li>";
		if ($_SESSION['perfil'] != 'Invitado'){
							echo "<li><a href='cerrarsesion.php'>Close Sesión</a></li>";
							}
							$fecha=date("d - m - y / H : i");
		echo "<li style='float:right; margin-right:5px; color: white'>" . $fecha . "</li>";
		?>
	</ul>
	</div>
	</nav>
<?php
}

function contenidoEN()
{
	?>
	<section id="main">
		<section id="content">
			<article>
				<h2>Welcome</h2>
				You are in a PHP application as shown on the use of PHP users, this application will be reflected in the user registration, session variables, sessions, includes functions for creating websites and more<br><br>
			</article>
		</section>
	<?php
}

function contenidoLoginEN()
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
				<?php form_registroEN(); ?>
			</article>
		</section>
		<?php
}

function form_registroEN()
{
	?>
	<h2>Registro</h2>
	<img src="images/randomsymbol.png" class="alignleft" />
				<form method="post" action="registrarse.php">
					* Required
					<br><br>
					User Name: <input type="text" pattern='[a-zd_]{4,15}' name="usuario" required>*
					<br><br>
					Password: <input type="password" pattern='[a-zd_]{4,15}' name="password" required>*
					<br><br>
					Type:
					<select name="perfil">
						<option value="Administrador">Administrador</option>
						<option value="Redactor">Redactor</option>
						<option value="Editor">Editor</option>
					</select>
					<br><br>
					<input type="submit" name="enviar" value="Send">
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
					* Obligatory
					<br><br>
					User Name: <input type="text" pattern='[a-zd_]{4,15}' name="usuario" required>*
					<br><br>
					Password: <input type="password" pattern='[a-zd_]{4,15}' name="password" required>*
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
				echo '<p><a href=' . $url . '>Back</a></p>';
				echo '</article>';
						
	echo '</section>';
}

function accionesEN()
{
	echo '<aside id="sidebar">';
				echo '<h3>Actions</h3>';
					echo '<ul>';
						if($_SESSION['perfil'] == 'Invitado'){
							echo '<li><a href="login.php">Login</a></li>';
							echo '<li><a href="registrarse.php">Registrer</a></li>';
						}
						else if($_SESSION['perfil'] == 'Administrador'){
							echo '<li><a href="escribir.php">Write</a></li>';
							echo '<li><a href="publicar.php">Public</a></li>';
							echo '<li><a href="usuarios.php">Users</a></li>';
						}
						else if($_SESSION['perfil'] == 'Redactor'){
							echo '<li><a href="escribir.php">Write</a></li>';
							echo '<li><a href="publicar.php">Public</a></li>';
						}
						else if($_SESSION['perfil'] == 'Editor'){
							echo '<li><a href="escribir.php">Write</a></li>';
						}
						
					echo '</ul>';

		echo '</aside>';

	echo '</section>';
}

function pieEN()
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