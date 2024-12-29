<?php 
include ("Clases_BD_Sistem/Conex_Sistem.php");

	class Disponibilidad{

		private $Visa_Porc;
		private $Visa_Aprobaciones;
		private $Master_Porc;
		private $Master_Aprobaciones;
		private $Maestro_Porc;
		private $Maestro_Aprobaciones;
		private $Ipg_Porc;
		private $Ipg_Aprobaciones;
		private $Porc_Time_Out;
		private $Time_Out;

		private $Banca_Internet;
		private $Pagina_Publica;
		private $Pago_Clave;
		private $Biopago;
		private $ATM;
		private $Suiche_7B_Adquiriente;
		private $Suiche_7B_Emisor;
		private $IST_Switch;

		
		

		function _construct($Visa_Porc,$Visa_Aprobaciones,$Master_Porc,$Master_Aprobaciones,$Maestro_Porc,$Maestro_Aprobaciones,$Ipg_Porc,$Ipg_Aprobaciones,$Porc_Time_Out,$Time_Out,$Banca_Internet,$Pagina_Publica,$Pago_Clave,$Biopago,$ATM,$Suiche_7B_Adquiriente,$Suiche_7B_Emisor,$IST_Switch){


			$this->Visa_Porc = $Visa_Porc;
			$this->Visa_Aprobaciones = $Visa_Aprobaciones;
			$this->Master_Porc = $Master_Porc;
			$this->Master_Aprobaciones = $Master_Aprobaciones;
			$this->Maestro_Porc = $Maestro_Porc;
			$this->Maestro_Aprobaciones = $Maestro_Aprobaciones;
			$this->Ipg_Porc = $Ipg_Porc;
			$this->Ipg_Aprobaciones = $Ipg_Aprobaciones;
			$this->Porc_Time_Out = $Porc_Time_Out;
			$this->Time_Out = $Time_Out;

			$this->Banca_Internet = $Banca_Internet;
			$this->Pagina_Publica = $Pagina_Publica;
			$this->Pago_Clave = $Pago_Clave;
			$this->Biopago = $Biopago;
			$this->ATM = $ATM;
			$this->Suiche_7B_Adquiriente = $Suiche_7B_Adquiriente;
			$this->Suiche_7B_Emisor = $Suiche_7B_Emisor;
			$this->IST_Switch = $IST_Switch;

			
		}	


			function registroDisponibilidad(){
 
				$conexiones= new Conexion();
				$conexiones->conectarse();

				$registroDisponibilidad = "INSERT INTO Disponibilidad (Visa_Porc,Visa_Aprobaciones,Master_Porc,Master_Aprobaciones,Maestro_Porc,Maestro_Aprobaciones,Ipg_Porc,Ipg_Aprobaciones,Porc_Time_Out,Time_Out,Banca_Internet,Pagina_Publica,Pago_Clave,Biopago,ATM,Suiche_7B_Emisor,Suiche_7B_Adquiriente,IST_Switch) VALUES ('$this->Visa_Porc', '$this->Visa_Aprobaciones', '$this->Master_Porc', '$this->Master_Aprobaciones', '$this->Maestro_Porc', '$this->Maestro_Aprobaciones', '$this->Ipg_Porc', '$this->Ipg_Aprobaciones', '$this->Porc_Time_Out', '$this->Time_Out', '$this->Banca_Internet', '$this->Pagina_Publica', '$this->Pago_Clave', '$this->Biopago', '$this->ATM', '$this->Suiche_7B_Emisor', '$this->Suiche_7B_Adquiriente', '$this->IST_Switch');";

				$result = pg_query($registroDisponibilidad) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

			}
	}

  

    ?>

