<?php
	session_start();

	if ($_SESSION['perfil'] != 'Administrador'){
		header('Location: cerrarsesion.php');
	}
	else if ($_SESSION['idioma'] == 'spanish'){
		include("salida_html.php");

		cabecera();
		idioma();
		estado();
		contenidoMensaje("Gestión de usuarios","index.php");
		acciones();
		pie();
	} else if ($_SESSION['idioma'] == 'english'){
		include("salidasEN.php");
		cabeceraEN();
		idioma();
		estadoEN();
		contenidoMensaje("Users gestion","index.php");
		accionesEN();
		pieEN();
	}

	
?>