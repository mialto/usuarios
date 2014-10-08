<?php
	session_start();

	if($_SESSION['perfil'] != 'Invitado'){
		header('Location: cerrarsesion.php');
	}
	else if ($_SESSION['idioma'] == 'spanish'){
		include("salida_html.php");

		cabecera();
		idioma();
		estado();
			if(isset($_POST['enviar'])){
				if(buscar_usuario($_POST['usuario'],$_POST['password'])){
					header('Location: index.php');
				}
				else{
					contenidoMensaje("Usuario o contraseña incorrectos","login.php");
				}
			}
			else{
				contenidoLogin();
			}
		acciones();
		pie();
	} else if($_SESSION['idioma'] == 'english'){
		include("salidasEN.php");
		cabeceraEN();
		idioma();
		estadoEN();
		if(isset($_POST['enviar'])){
				if(buscar_usuario($_POST['usuario'],$_POST['password'])){
					header('Location: index.php');
				}
				else{
					contenidoMensaje("Login or password incorrect","login.php");
				}
			}
			else{
				contenidoLoginEN();
			}
		accionesEN();
		pieEN();
	}

	
?>