<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Funciones para el header
*/
//Establece los botones active del menú
function echoActiveClassIfRequestMatches($requestUri)
{
	    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
        $cf = explode ("\..", $current_file_name); 
	    if ($cf[0] == $requestUri && $cf[0] != "index" && $cf[0] != "cotiza")
	        echo 'class="nav-item active"';
}