<?php
/*
* Versión: 1.0;
* Cliente: Somefriends;
* Autor: Amilkhael Chávez Delgado;
* Documento: Clase Contacto
*/
	class Contacto
	{
		//Atributos
		private $post;
		private $boletos;
		//Constructor
		public function __construct($post)
		{
			$this->post=$post;
			$this->boletos=0;
		}
		//Metodos
		public function enviarCorreo()
		{
			date_default_timezone_set('America/Mexico_City');
			$horario=localtime(time(),true);
			//Destinatarios
			$para=$this->post["cmpCorreo"];
			//$para="amilkhael@gmail.com";
			//Asunto
			$subject = "Boletos // Boda de Paola y Arturo";
			//Cabeceras
			$from =  "invitaciones@paolayarturo.somefriends.pro";
			//$headers = "From: $from"."\n\r";
			// To send HTML mail, the Content-type header must be set
			$headers[] = 'MIME-Version: 1.0';
			$headers[] = 'From: invitaciones@paolayarturo.somefriends.pro';
			$headers[] = 'Content-type: text/html; charset=UTF-8';
			
			$message ="<html>".
			"<head>".
				"<title>Paola y Arturo</title>".
			"</head>".
			"<body>".
				
				"<p>"."Fecha: ".date('d/m/y',time()). " a las ".$horario['tm_hour'].":".$horario['tm_min'].":".$horario['tm_sec']."</p>".
			"</body>".
			"</html>";

			//Mensaje
			/*$message = $this->post["cmpNombre"]." (".$this->post["cmpTelefono"].") ".
			"\n\r".
			"\n\r".
			"Fecha: ".date('d/m/y',time()). " a las ".$horario['tm_hour'].":".$horario['tm_min'].":".$horario['tm_sec'].
			"\n".
			"Descripción del proyecto ".
			"\n\r".
			$this->post["cmpProyecto"].
			"\n\r".
			"\n\r".
			"Servicios elegidos".
			"\n\r".
			$this->servicios;

			//Ajuste a 70 caracteres por linea
			$message = wordwrap($message, 70);*/
		
			//Envio del correo
			mail($para,$subject,$message,implode("\r\n", $headers));
		}
		public function obtenBoletos()
		{

		}
	}


?>