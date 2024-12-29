<?php 
include ("Clases_BD_Sistem/Conex_Sistem.php");

	class Guardia{

		public $Supervisor;
		public $Primer_Integrante;
		public $Segundo_Integrante;
		public $Tercer_Integrante;
		public $Cuarto_Integrante;

		public $Primer_Gention;
		public $Segundo_Gention;
		public $Primer_Monitoreo;
		public $Segundo_Monitoreo;


		function _construct($Supervisor,$Primer_Integrante,$Segundo_Integrante,$Tercer_Integrante,$Cuarto_Integrante,$$Primer_Gention,$Segundo_Gention,$Primer_Monitoreo,$Segundo_Monitoreo){


			$this->Supervisor = $Supervisor;
			$this->Primer_Integrante = $Primer_Integrante;
			$this->Segundo_Integrante = $Segundo_Integrante;
			$this->Tercer_Integrante = $Tercer_Integrante;
			$this->Cuarto_Integrante = $Cuarto_Integrante;

			$this->Primer_Gention = $Primer_Gention;
			$this->Segundo_Gention = $Segundo_Gention;
			$this->Primer_Monitoreo = $Primer_Monitoreo;
			$this->Segundo_Monitoreo = $Segundo_Monitoreo;

			
		}	


			function registroGuardia(){
 
				$conexiones= new Conexion();
				$conexiones->conectarse();

				$registroGuardia = "INSERT INTO Grupo_Guardia (Supervisor, Primer_Integrante, Segundo_Integrante, Tercer_Integrante, Cuarto_Integrante, Primer_Gention, Segundo_Gention, Primer_Monitoreo, Segundo_Monitoreo) VALUES ('$this->Supervisor', '$this->Primer_Integrante', '$this->Segundo_Integrante', '$this->Tercer_Integrante', '$this->Cuarto_Integrante', '$this->Primer_Gention', '$this->Segundo_Gention', '$this->Primer_Monitoreo', '$this->Segundo_Monitoreo');";

				$result = pg_query($registroGuardia) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

			}
	}

  

    ?>

