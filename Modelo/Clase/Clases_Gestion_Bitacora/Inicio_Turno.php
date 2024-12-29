<?php 
include ("Clases_BD_Sistem/Conex_Sistem.php");

	class Turno{

		public $Turno;

		public $Temperatura;
		public $Humedad;

		public $BO;
		public $M5;
		public $M9;

		public $Produccion;
		public $Desarrollo;
		public $Calidad;
		

		function _construct($Turno,$Temperatura,$Humedad,$BO,$M5,$M9,$Produccion,$Desarrollo,$Calidad){


			$this->Turno = $Turno;

			$this->Temperatura = $Temperatura;
			$this->Humedad = $Humedad;


			$this->BO = $BO;
			$this->M5 = $;
			$this->M9 = $M9;

			$this->Produccion = $Produccion;
			$this->Desarrollo = $Desarrollo;
			$this->Calidad = $Calidad;

			
		}	


			function registroTurno(){
 
				$conexiones= new Conexion();
				$conexiones->conectarse();

				$registroTurno = "INSERT INTO Inicio_Turno (Turno, Temperatura, Humedad, BO, M5, M9, Produccion, Desarrollo, Calidad) VALUES ('$this->Turno', '$this->Temperatura', '$this->Humedad', '$this->BO', '$this->M5', '$this->M9', '$this->Produccion', '$this->Desarrollo', '$this->Calidad');";

				$result = pg_query($registroTurno) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

			}
	}

  

    ?>

