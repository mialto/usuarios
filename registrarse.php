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
				if(buscar_solo_usuario($_POST['usuario'])){
					contenidoMensaje("El usuario especificado ya existe","registrarse.php");
				}
				else{
					array_push($_SESSION['sistema'],array("usuario"=>$_POST['usuario'],"password"=>$_POST['password'],"perfil"=>$_POST['perfil']));
					contenidoMensaje("Nuevo usuario registrado","login.php");
				}
			}
			else{
				contenidoR();
			}
		acciones();
		pie();
	} else if ($_SESSION['idioma'] == 'english'){
		include("salidasEN.php");

		cabeceraEN();
		idioma();
		estadoEN();
			if(isset($_POST['enviar'])){
				if(buscar_solo_usuario($_POST['usuario'])){
					contenidoMensaje("The specified user already exists","registrarse.php");
				}
				else{
					array_push($_SESSION['sistema'],array("usuario"=>$_POST['usuario'],"password"=>$_POST['password'],"perfil"=>$_POST['perfil']));
					contenidoMensaje("New registered user","login.php");
				}
			}
			else{
				contenidoR();
			}
		accionesEN();
		pieEN();
	}

	
?>