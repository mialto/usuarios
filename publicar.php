<?php
	session_start();

	if ($_SESSION['perfil'] == 'Invitado' || $_SESSION['perfil'] == 'Editor'){
		header('Location: cerrarsesion.php');
	}
	else if ($_SESSION['idioma'] == 'spanish'){
		include("salida_html.php");

		cabecera();
		idioma();
		estado();
		contenidoMensaje("Publicar","index.php");
		acciones();
		pie();
	} else if ($_SESSION['idioma'] == 'english'){
		include("salidasEN.php");
		cabeceraEN();
		idioma();
		estadoEN();
		contenidoMensaje("Public","index.php");
		accionesEN();
		pieEN();
	}

	
?>