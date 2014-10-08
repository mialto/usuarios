<?php
	session_start();
		

	if (!isset($_SESSION['perfil'])){
		$_SESSION['idioma'] = 'spanish';
		$_SESSION['perfil'] = 'Invitado';
		$_SESSION['usuario'] = '';
		$_SESSION['sistema'] = array(array("usuario"=>"admin","password"=>"admin","perfil"=>"Administrador"));
	}

	$_SESSION['idioma'] = 'spanish';
	if (isset($_REQUEST['idioma'])){
		$_SESSION['idioma'] = $_REQUEST['idioma'];
	}
	if($_SESSION['idioma'] == 'spanish'){
		include("salida_html.php");
		cabecera();
		idioma();
		estado();
		contenido();
		acciones();
		pie();
	} else if ($_SESSION['idioma'] == 'english'){
		include("salidasEn.php");
		cabeceraEN();
		idioma();
		estadoEN();
		contenidoEN();
		accionesEN();
		pieEN();
	}
	//header('Location: index.php');
?>