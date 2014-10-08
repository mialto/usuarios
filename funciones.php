<?php

function buscar_usuario($usr,$pass)
{
	$l_encontrado = false;
	foreach($_SESSION['sistema'] as $x=>$x_values){
				if($x_values["usuario"] == $usr && $x_values["password"] == $pass){
					$l_encontrado = true;
					$_SESSION['perfil'] = $x_values['perfil'];
					$_SESSION['usuario'] = $x_values['usuario'];
				}			
	}
	return $l_encontrado;
}

function buscar_solo_usuario($usr)
{
	$l_encontrado = false;
	foreach($_SESSION['sistema'] as $x=>$x_values){
				if($x_values["usuario"] == $usr){
					$l_encontrado = true;
				}			
	}
	return $l_encontrado;
}


?>