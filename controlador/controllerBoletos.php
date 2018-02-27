<?php
/*
* Versión: 1.0;
* Cliente: Somefriends;
* Autor: Amilkhael Chávez Delgado;
* Documento: Controlador de Contacto
*/
	include_once '../modelo/Contacto.php';
	$contactoLogica = new Contacto($_POST);
	$contactoLogica->obtenDestinatariosServicios();
	$contactoLogica->enviarCorreo();

	//header('Location: ../views/contacto.php');//Redirecionamos a la siguiente pagina del formulario
?>