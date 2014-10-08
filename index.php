<?php
	session_start();
		

	if (!isset($_SESSION['perfil'])){
		$_SESSION['idioma'] = 'spanish';
		$_SESSION['perfil'] = 'Invitado';
		$_SESSION['usuario'] = '';
		$_SESSION['sistema'] = array(array("usuario"=>"admin","password"=>"admin","perfil"=>"Administrador"));
	}
	
	if ($_SESSION['idioma'] == 'english'){
		include("salidasEn.php");
		cabeceraEN();
		idioma();
		estadoEN();
		contenidoEN();
		accionesEN();
		pieEN();
	} else {
		include("salida_html.php");
		cabecera();
		idioma();
		estado();
		contenido();
		acciones();
		pie();
	}

?>