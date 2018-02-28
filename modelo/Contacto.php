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
		private $adjuntoBoleto;
		//Constructor
		public function __construct($post)
		{
			$this->post=$post;
		}
		//Metodos
		public function enviarCorreo()
		{
			date_default_timezone_set('America/Mexico_City');
			$horario=localtime(time(),true);
			//Destinatarios
			$para=filter_var($this->post["cmpCorreo"], FILTER_SANITIZE_EMAIL);

			//$para="amilkhael@gmail.com";
			//Asunto
			$subject = "Boletos // Boda de Paola y Arturo";
			//Cabeceras
			$from_mail =  "invitaciones@paolayarturo.somefriends.pro";
			$from_name ="Paola y Arturo";

			$message ="<html>".
			"<head>".
				"<title>Paola y Arturo</title>".
			"</head>".
			"<body>".
				
				"<p>"."Fecha: ".date('d/m/y',time()). " a las ".$horario['tm_hour'].":".$horario['tm_min'].":".$horario['tm_sec']."</p>".
			"</body>".
			"</html>";

			/* Attachment File */
			  // Attachment location
			  $file_name = $this->adjuntoBoleto;
			  $path = "../boletos/";
			   
			  // Read the file content
			  $file = $path.$file_name;
			  $file_size = filesize($file);
			  $handle = fopen($file, "r");
			  $content = fread($handle, $file_size);
			  fclose($handle);
			  $encoded_content = chunk_split(base64_encode($content));
				
				$boundary = md5("sanwebe");
		        //header
		        $headers = "MIME-Version: 1.0\r\n";
		        $headers .= "From:".$from_mail."\r\n";
		        $headers .= "Reply-To: ".$from_mail."" . "\r\n";
		        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";
		       
		        //plain text
		        $body = "--$boundary\r\n";
		        $body .= "Content-Type: text/html; charset=UTF-8\r\n";
		        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
		        $body .= chunk_split(base64_encode($message));
		       
		        //attachment
		        $body .= "--$boundary\r\n";
		        $body .="Content-Type: application/octet-stream; name=\"$file_name\"\r\n";
		        $body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
		        $body .="Content-Transfer-Encoding: base64\r\n";
		        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
		        $body .= $encoded_content;



	
			//Envio del correo
			//mail($para,$subject,$message,$header);
			// Send email
			  if (mail($para, $subject, $body, $headers) ){
			    echo "Sent";
			  } else {
			    echo "Error al enviar";
			  }
		}
		public function obtenAdjuntoBoletos($numeroBoletos)
		{
			switch ($numeroBoletos) {
				case 1:
					$this->adjuntoBoleto="1.png";
					break;
				case 2:
					$this->adjuntoBoleto="2.png";
					break;				
				case 3:
					$this->adjuntoBoleto="3.png";
					break;
				case 4:
					$this->adjuntoBoleto="4.png";
					break;
			}
		}
	}


?>