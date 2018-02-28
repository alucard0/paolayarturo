<?php

/*
* Versión: 1.0;
* Cliente: Somefriends;
* Autor: Amilkhael Chávez Delgado;
* Documento: Controlador de Contacto
*/
	include_once '../modelo/Contacto.php';
	include_once '../modelo/BoletosBO.php';
	$boletosLogica = new BoletosBO($_POST);
	$contactoLogica = new Contacto($_POST);
	$numboletos=$boletosLogica->obtenNumeroBoletos();
	if($numboletos>0)
	{
		$contactoLogica->obtenAdjuntoBoletos($numboletos);
		$contactoLogica->enviarCorreo();
	}
	else{
		echo"Error";
	}

	

?>