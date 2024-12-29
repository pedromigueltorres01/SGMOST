<?php 
include ("Clases_BD_Sistem/Conex_Sistem.php");

	class Disponibilidad{

		public $Visa_Porc;
		public $Visa_Aprobaciones;
		public $Master_Porc;
		public $Master_Aprobaciones;
		public $Ipg_Porc;
		public $Ipg_Aprobaciones;
		public $Porc_Time_Out;
		public $Time_Out;

		public $IST_Switch;
		public $Suiche_7B_Adquiriente;
		public $Suiche_7B_Emisor;

		public $Empresarial;
		public $Acceso_Empresarial;

		public $Usuarios_Activos;
		public $Usuarios_Login;
		public $Posición_Consolidada;
		public $Movimientos_Cuentas;
		public $Usuarios_Transando;

		public $P2P_Aprobadas;
		public $P2P_Rechazadas;
		public $P2P_Total;

		public $P2C_Aprobadas;
		public $P2C_Rechazadas;
		public $P2C_Total;

		public $MQ0P;
		public $Msj_Entregar_MQ0P;

		public $MQ1P;
		public $Msj_Entregar_MQ1P;

		public $Encolamiento_Tedexis;
		public $Instancias_Tedexis;

		public $Encolamiento_Total_Texto;
		public $Instancias_Total_Texto;


		public $Cantv;
		public $Movilnet;
		public $Conatel;
		public $Digitel;
		public $Seniat;
		public $Movistar;
		public $Corpoelec;
		public $Billetera_Movil;
		public $Hidrocapital;

		public $Max_Task_Global;
		public $Cpu;
		public $Temperatura;
		public $Transacciones_Cics;

		public $Porc_Agencias;
		public $Enlaces_Operativos;
		public $Porc_Operativos;
		public $Enlaces_Inoperativos;
		public $Porc_Inoperativos;


		

		function _construct($Visa_Porc,$Visa_Aprobaciones,$Master_Porc,$Master_Aprobaciones,$Ipg_Porc,$Ipg_Aprobaciones,$Porc_Time_Out,$Time_Out,$IST_Switch,$Suiche_7B_Adquiriente,$Suiche_7B_Emisor,$Empresarial,$Acceso_Empresarial,$Usuarios_Activos,$Usuarios_Login,$Posición_Consolidada,$Movimientos_Cuentas,$Usuarios_Transando,$P2P_Aprobadas,$P2P_Rechazadas,$P2P_Total,$P2C_Aprobadas,$P2C_Rechazadas,$P2C_Total,$MQ0P,$Msj_Entregar_MQ0P,$MQ1P,$Msj_Entregar_MQ1P,$Encolamiento_Tedexis,$Instancias_Total_Texto,$Cantv,$Movilnet,$Conatel,$Digitel,$Seniat,$Movistar,$Corpoelec,$Billetera_Movil,$Hidrocapital,$Max_Task_Global,$Cpu,$Temperatura,$Transacciones_Cics,$Porc_Agencias,$Enlaces_Operativos,$Porc_Operativos,$Enlaces_Inoperativos,$Porc_Inoperativos){


			$this->Visa_Porc = $Visa_Porc;
			$this->Visa_Aprobaciones = $Visa_Aprobaciones;
			$this->Master_Porc = $Master_Porc;
			$this->Master_Aprobaciones = $Master_Aprobaciones;
			$this->Ipg_Porc = $Ipg_Porc;
			$this->Ipg_Aprobaciones = $Ipg_Aprobaciones;
			$this->Porc_Time_Out = $Porc_Time_Out;
			$this->Time_Out = $Time_Out;

			$this->IST_Switch = $IST_Switch;
			$this->Suiche_7B_Adquiriente = $Suiche_7B_Adquiriente;
			$this->Suiche_7B_Emisor = $Suiche_7B_Emisor;

			$this->Empresarial = $Empresarial;
			$this->Acceso_Empresarial = $Acceso_Empresarial;

			$this->Usuarios_Activos = $Usuarios_Activos;
			$this->Usuarios_Login = $Usuarios_Login;
			$this->Posición_Consolidada = $Posición_Consolidada;
			$this->Movimientos_Cuentas = $Movimientos_Cuentas;			
			$this->Usuarios_Transando = $Usuarios_Transando;

			$this->P2P_Aprobadas = $P2P_Aprobadas;
			$this->P2P_Rechazadas = $P2P_Rechazadas;
			$this->P2P_Total = $P2P_Total;

			$this->P2C_Aprobadas = $P2C_Aprobadas;
			$this->P2C_Rechazadas = $P2C_Rechazadas;
			$this->P2C_Total = $P2C_Total;

			$this->MQ0P = $MQ0P;
			$this->Msj_Entregar_MQ0P = $Msj_Entregar_MQ0P;

			$this->MQ1P = $MQ1P;
			$this->Msj_Entregar_MQ1P = $Msj_Entregar_MQ1P;


			$this->Cantv = $Cantv;
			$this->Movilnet = $Movilnet;
			$this->Conatel = $Conatel;
			$this->Digitel = $Digitel;			
			$this->Seniat = $Seniat;
			$this->Movistar = $Movistar;
			$this->Corpoelec = $Corpoelec;
			$this->Billetera_Movil = $Billetera_Movil;			
			$this->Hidrocapital = $Hidrocapital;

			$this->Max_Task_Global = $Max_Task_Global;
			$this->Cpu = $Cpu;
			$this->Temperatura = $Temperatura;
			$this->Transacciones_Cics = $Transacciones_Cics;

			$this->Porc_Agencias = $Porc_Agencias;
			$this->Enlaces_Operativos = $Enlaces_Operativos;
			$this->Porc_Operativos = $Porc_Operativos;
			$this->Enlaces_Inoperativos = $Enlaces_Inoperativos;			
			$this->Porc_Inoperativos = $Porc_Inoperativos;




			
		}	


			function registroDisponibilidad(){
 
				$conexiones= new Conexion();
				$conexiones->conectarse();

				$registroDisponibilidad = "INSERT INTO usuario (Visa_Porc, Visa_Aprobaciones, Master_Porc, Master_Aprobaciones, Ipg_Porc, Ipg_Aprobaciones, Porc_Time_Out, Time_Out, IST_Switch, Suiche_7B_Adquiriente, Suiche_7B_Emisor, Empresarial, Acceso_Empresarial, Usuarios_Activos, Usuarios_Login, Posición_Consolidada, Movimientos_Cuentas, Usuarios_Transando, P2P_Aprobadas, P2P_Rechazadas, P2P_Total, P2C_Aprobadas, P2C_Rechazadas, P2C_Total, MQ0P, Msj_Entregar_MQ0P, MQ1P, Msj_Entregar_MQ1P, Encolamiento_Tedexis, Instancias_Total_Texto, Cantv, Movilnet, Conatel, Digitel, Seniat, Movistar, Corpoelec, Billetera_Movil, Hidrocapital, Max_Task_Global, Cpu, Temperatura, Transacciones_Cics, Porc_Agencias, Enlaces_Operativos, Porc_Operativos, Enlaces_Inoperativos, Porc_Inoperativos) VALUES ('$this->Visa_Porc', '$this->Visa_Aprobaciones', '$this->Master_Porc', '$this->Master_Aprobaciones', '$this->Ipg_Porc', '$this->Ipg_Aprobaciones', '$this->Porc_Time_Out', '$this->Time_Out', '$this->IST_Switch', '$this->Empresarial', '$this->Acceso_Empresarial', '$this->Usuarios_Activos', '$this->Usuarios_Login', '$this->Posición_Consolidada', '$this->Movimientos_Cuentas', '$this->Usuarios_Transando', '$this->P2P_Aprobadas', '$this->P2P_Rechazadas', '$this->P2P_Total', '$this->P2C_Aprobadas', '$this->P2C_Rechazadas', '$this->P2C_Total', '$this->MQ0P', '$this->Msj_Entregar_MQ0P', '$this->MQ1P', '$this->Msj_Entregar_MQ1P', '$this->Encolamiento_Tedexis', '$this->Instancias_Tedexis', '$this->Encolamiento_Total_Texto', '$this->Instancias_Total_Texto', '$this->Cantv', '$this->Movilnet', '$this->Conatel', '$this->Digitel', '$this->Seniat', '$this->Movistar', '$this->Corpoelec', '$this->Billetera_Movil', '$this->Hidrocapital', '$this->Max_Task_Global', '$this->Cpu', '$this->Temperatura', '$this->Transacciones_Cics', '$this->Porc_Agencias', '$this->Enlaces_Operativos', '$this->Porc_Operativos', '$this->Enlaces_Inoperativos', '$this->Porc_Inoperativos');";

				$result = pg_query($registroDisponibilidad) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

			}
	}

  

    ?>

