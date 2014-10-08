<?php
	session_start();

	if ($_SESSION['perfil'] == 'Invitado'){
		header('Location: cerrarsesion.php');
	}
	else if ($_SESSION['idioma'] == 'spanish'){
		include("salida_html.php");

		cabecera();
		idioma();
		estado();
		contenidoMensaje("Escribirr","index.php");
		acciones();
		pie();
	} else if ($_SESSION['idioma'] == 'english'){
		include("salidasEN.php");
		cabeceraEN();
		idioma();
		estadoEN();
		contenidoMensaje("Write","index.php");
		accionesEN();
		pieEN();
	}
	
?>