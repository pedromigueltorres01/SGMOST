<?php 
include ("Clases_BD_Sistem/Conex_Sistem.php");

	class CierreTurno{

		public $Temperatura;
		public $Humedad;

		public $BO;
		public $M5;
		public $M9;

		public $Produccion;
		public $Desarrollo;
		public $Calidad;

		public $Observaciones;
		

		function _construct($Turno,$Temperatura,$Humedad,$BO,$M5,$M9,$Produccion,$Desarrollo,$Calidad,$Observaciones){


			$this->Turno = $Turno;

			$this->Temperatura = $Temperatura;
			$this->Humedad = $Humedad;


			$this->BO = $BO;
			$this->M5 = $;
			$this->M9 = $M9;

			$this->Produccion = $Produccion;
			$this->Desarrollo = $Desarrollo;
			$this->Calidad = $Calidad;

			$this->Observaciones = $Observaciones;

			
		}	


			function registroCierre_Turno(){
 
				$conexiones= new Conexion();
				$conexiones->conectarse();

				$registroCierre_Turno = "INSERT INTO Cierre_Turno (Turno, Temperatura, Humedad, BO, M5, M9, Produccion, Desarrollo, Calidad, Observaciones) VALUES ('$this->Turno', '$this->Temperatura', '$this->Humedad', '$this->BO', '$this->M5', '$this->M9', '$this->Produccion', '$this->Desarrollo', '$this->Calidad', '$this->Observaciones');";

				$result = pg_query($registroCierre_Turno) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

			}
	}

  

    ?>

