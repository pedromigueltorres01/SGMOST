<?php 
include ("Clases_BD_Sistem/Conex_Sistem.php");

	class Alerta{

		Private $Tipo_Alerta;
		Private $Afectacion;

		Private $Fecha_Actividad;
		Private $Hora_Actividad;

		Private $Nombre_Actividad;

		Private $Personal_Acargo_BDV;
		Private $Personal_Externo_Acargo;

		

		function _construct($Tipo_Alerta,$Afectacion,$Fecha_Actividad,$Hora_Actividad,$Nombre_Actividad,$Personal_Acargo_BDV,$Personal_Externo_Acargo){


			$this->Tipo_Alerta = $Tipo_Alerta;
			$this->Afectacion = $Afectacion;

			$this->Fecha_Actividad = $Fecha_Actividad;
			$this->Hora_Actividad = $Hora_Actividad;

			$this->Nombre_Actividad = $Nombre_Actividad;
			$this->Personal_Acargo_BDV = $Personal_Acargo_BDV;

			$this->Personal_Externo_Acargo = $Personal_Externo_Acargo;
			
		}	


			function GenerarAlerta(){
 
				$conexiones= new Conexion();
				$conexiones->conectarse();

				$GenerarAlerta = "INSERT INTO alertas (Tipo_Alerta, Afectacion, Fecha_Actividad, Hora_Actividad, Nombre_Actividad, Personal_Acargo_BDV, Personal_Externo_Acargo) VALUES ('$this->Tipo_Alerta', '$this->Afectacion', '$this->Fecha_Actividad', '$this->Hora_Actividad', '$this->Nombre_Actividad', '$this->Personal_Acargo_BDV', '$this->Personal_Externo_Acargo');";

				$result = pg_query($GenerarAlerta) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

			}
	}

  

    ?>

