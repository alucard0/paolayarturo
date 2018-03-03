<?php
include_once 'ConectaBD.php';
/*
* Versión: 1.0;
* Cliente: Somefriends;
* Autor: Amilkhael Chávez Delgado;
* Documento: Clase Contacto
*/
	class BoletosBO
	{	
		//Atributos
		private $correo;

		//Constructor
		public function __construct($post)
		{
			$this->correo=$post["cmpCorreo"];
		}

		//Metodos
		public function obtenNumeroBoletos()
		{
			$bdconectada = new ConectaBD();
			$query="";
			$numBoletos=0;

			$bdconectada->conectar();//Conectamos la BD

			//obtenemos los boletos
			$query="SELECT numeroBoletos FROM boletos WHERE correo='".$this->correo."'";
			$result=$bdconectada->consulta($query);
			
			if ($result->num_rows > 0) {
	   			$row = $result->fetch_assoc();
				$numBoletos=$row["numeroBoletos"];
			}
			$query="UPDATE boletos SET estatus=1 WHERE correo='".$this->correo."'";
			$bdconectada->consulta($query);

			$bdconectada->desconectar();

			return $numBoletos;
		}
	}


?>