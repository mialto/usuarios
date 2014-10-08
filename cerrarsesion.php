<?php
	session_start();
	$_SESSION['perfil'] = "Invitado";
	$_SESSION['usuario'] = "";
	header('Location: index.php');
?>