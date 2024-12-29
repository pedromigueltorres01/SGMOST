<?php 
include ("Clases_BD_Sistem/Conex_Sistem.php");

	class Documentacion{

		public $Gestion_Monitoreo;
		public $Gestion_Seguridad;
		public $Gestion_Seguimiento;

		function _construct($Gestion_Monitoreo,$Gestion_Seguridad,$Gestion_Seguimiento){


			$this->Gestion_Monitoreo = $Gestion_Monitoreo;
			$this->Gestion_Seguridad = $Gestion_Seguridad;
			$this->Gestion_Seguimiento = $Gestion_Seguimiento;
			
		}	


			function registroDocumentacion(){
 
				$conexiones= new Conexion();
				$conexiones->conectarse();

				$registroDocumentacion = "INSERT INTO Documentacion_Turno (Gestion_Monitoreo, Gestion_Seguridad, Gestion_Seguimiento) VALUES ('$this->Gestion_Monitoreo', '$this->Gestion_Seguridad', '$this->Gestion_Seguimiento';";

				$result = pg_query($registroDocumentacion) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

			}
	}

  

    ?>

