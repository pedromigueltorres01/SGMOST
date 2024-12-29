<?php 


	class Trabajador{

		private $Primer_Nombre;
		private $Segundo_Nombre;
		private $Primer_Apellido;
		private $Segundo_apellido;
		private $Nacionalidad;
		private $Cedula;
		private $Perfil;
		private $Grupo;
		private $Fecha_Nacimiento;
		private $Fecha_Ingreso;
		private $Operador_Telf_Cel;
		private $Telf_Celular;
		private $Operador_Telf_Casa;
		private $Telf_Casa;
		private $Usuario;
		private $Password;
		private $Password2;
		private $Estado;
		private $Municipio;
		private $Ciudad;
		private $Calle;
		private $Urbanizacion;
		private $Casa; 
		private $status=1;
		private $resultado=false;
		private $consulta;
		private $dato;



		public function registroPersonal(
		$Primer_Nombre,
		$Segundo_Nombre,
		$Primer_Apellido,
		$Segundo_apellido,
		$Nacionalidad,
		$Cedula,
		$Perfil,
		$grupo,
		$Fecha_Nacimiento,
		$Fecha_Ingreso,
		$Operador_Telf_Cel,
		$Telf_Celular,
		$Operador_Telf_Casaa,
		$Telf_Casa,
		$Usuario,
		$Password,
		$Password_Verificacion){
		
 			include ("Conex_Sistem.php");
				$conexiones= new Conexion();
				$con=$conexiones->conectarse();
		$sql=pg_query($con,"SELECT Usuario FROM  usuarios where Usuario  = '{$Usuario}' or cedula='{$Cedula}' and status = '1'");
		if (pg_num_rows($sql)==0) {
			# code...
		$this->Primer_Nombre=ucfirst($Primer_Nombre);
		$this->Segundo_Nombre=ucfirst($Segundo_Nombre);
		$this->Primer_Apellido=ucfirst($Primer_Apellido);
		$this->Segundo_apellido=ucfirst($Segundo_apellido);
		$this->Nacionalidad=$Nacionalidad;
		$this->Cedula=$Cedula;
		$this->Perfil=$Perfil;
		$this->Grupo=$grupo;
		$this->Fecha_Nacimiento=$Fecha_Nacimiento;
		$this->Fecha_Ingreso=$Fecha_Ingreso;
		$this->Operador_Telf_Cel=$Operador_Telf_Cel;
		$this->Telf_Celular=$Telf_Celular;
		$this->Operador_Telf_Casa=$Operador_Telf_Casaa;
		$this->Telf_Casa=$Telf_Casa;
		$this->Usuario=strtoupper($Usuario);
		$contra1=password_hash($Password, PASSWORD_DEFAULT,array("cost"=>12));
		$contra2=password_hash($Password_Verificacion, PASSWORD_DEFAULT,array("cost"=>12));
		$this->Password=$contra1;
		$this->Password2=$contra2;
		

				$registroPersonal =pg_query($con,"INSERT INTO usuarios (
				Primer_Nombre,
				Segundo_Nombre, 
				Primer_Apellido,
				Segundo_apellido,
				Nacionalidad,
 				Cedula,
 				Perfil,
 				grupo,
 				Fecha_Nacimiento,
 				Fecha_Ingreso,
 				Operador_Telf_Cel,
 				Telf_Celular,
 				Operador_Telf_Casa,
  				Telf_Casa,
  				Usuario,
  				Password1,
  				Password_confir,
  				status)VALUES (
  				'{$this->Primer_Nombre}',
  				'{$this->Segundo_Nombre}', 
  				'{$this->Primer_Apellido}', 
  				'{$this->Segundo_apellido}', 
  				'{$this->Nacionalidad}', 
  				'{$this->Cedula}', 
  				'{$this->Perfil}', 
  				'{$this->Grupo}',
  				'{$this->Fecha_Nacimiento}', 
  				'{$this->Fecha_Ingreso}', 
  				'{$this->Operador_Telf_Cel}', 
  				'{$this->Telf_Celular}', 
  				'{$this->Operador_Telf_Casa}', 
  				'{$this->Telf_Casa}', 
  				'{$this->Usuario}', 
  				'{$this->Password}',
  				'{$this->Password2}',
  				'$this->status');");
  				return $this->resultado=true;
  				pg_close($con);
				}else
				{
					return $this->resultado;
					pg_close($con);
				}

			}
			public function consultar(){
				include ("Conex_Sistem.php");
				$conexiones= new Conexion();
				$con=$conexiones->conectarse();

				$sql=pg_query($con,"SELECT primer_nombre,primer_apellido,cedula,perfil,grupo,fecha_Ingreso,Operador_Telf_Cel,Telf_Celular,Usuario FROM  usuarios where status = '1'");
				return $this->consulta=$sql;
				pg_close($con);

			}
			public function BusquedaEspecica($datoUsuario){
				include ("Conex_Sistem.php");
				$conexiones= new Conexion();
				$con=$conexiones->conectarse();
			$this->dato=strtoupper($datoUsuario);
				$sql=pg_query($con,"
				SELECT Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_apellido,Nacionalidad,Cedula,grupo,Fecha_Nacimiento,Fecha_Ingreso,Operador_Telf_Cel,Telf_Celular,Operador_Telf_Casa,Telf_Casa,Usuario,Password1,Password_confir FROM  usuarios  where 
				Usuario='{$this->dato}' AND status = '1'");

			if(pg_num_rows($sql)==0){
				$sql="";
				$sql=pg_query($con,"SELECT Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_apellido,Nacionalidad,Cedula,grupo,Fecha_Nacimiento,Fecha_Ingreso,Operador_Telf_Cel,Telf_Celular,Operador_Telf_Casa,Telf_Casa,Usuario,Password1,Password_confir FROM  usuarios  where 
				cedula='{$this->dato}' AND status = '1'");
				if(!$sql)
					{ echo "string";;
					}

				if(pg_num_rows($sql)==0){
					
					
					pg_close($con);
				return $this->resultado;
				}else{
					pg_close($con);
					return $sql;
				}
					
			}else{pg_close($con);
				return $sql; 
			}
				
			
	
			
			}public function modificar($Primer_Nombre,
					$Segundo_Nombre,
					$Primer_Apellido,
					$Segundo_apellido,
					$Nacionalidad,
					$Cedula,
					$Perfil,
					$grupo,
					$Fecha_Nacimiento,
					$Fecha_Ingreso,
					$Operador_Telf_Cel,
					$Telf_Celular,
					$Operador_Telf_Casa,
					$Telf_Casa,
					$Usuario,
					$Password1,
					$Password_Verificacion
					){
					$this->Primer_Nombre=ucfirst($Primer_Nombre);
					$this->Segundo_Nombre=ucfirst($Segundo_Nombre);
					$this->Primer_Apellido=ucfirst($Primer_Apellido);
					$this->Segundo_apellido=ucfirst($Segundo_apellido);
					$this->Nacionalidad=$Nacionalidad;
					$this->Cedula=$Cedula;
					$this->Perfil=$Perfil;
					$this->Grupo=$grupo;
					$this->Fecha_Nacimiento=$Fecha_Nacimiento;
					$this->Fecha_Ingreso=$Fecha_Ingreso;
					$this->Operador_Telf_Cel=$Operador_Telf_Cel;
					$this->Telf_Celular=$Telf_Celular;
					$this->Operador_Telf_Casa=$Operador_Telf_Casa;
					$this->Telf_Casa=$Telf_Casa;
					$this->Usuario=$Usuario;
					$contra1=password_hash($Password1, PASSWORD_DEFAULT,array("cost"=>12));
					$contra2=password_hash($Password_Verificacion, PASSWORD_DEFAULT,array("cost"=>12));
					$this->Password=$contra1;
					$this->Password2=$contra2;
				include ("Conex_Sistem.php");
				$conexiones= new Conexion();
				$con=$conexiones->conectarse();
				

				

					$sql=pg_query($con,"UPDATE usuarios set Primer_Nombre ='{$this->Primer_Nombre}',Segundo_Nombre='{$this->Segundo_Nombre}',Primer_Apellido='{$this->Primer_Apellido}',
						Segundo_apellido='{$this->Segundo_apellido}',Nacionalidad='{$this->Nacionalidad}',
						Cedula='{$this->Cedula}',Perfil='{$this->Perfil}',grupo='{$this->Grupo}',
						Fecha_Nacimiento='{$this->Fecha_Nacimiento}',
					Fecha_Ingreso='{$this->Fecha_Ingreso}',Operador_Telf_Cel='{$this->Operador_Telf_Cel}',Telf_Celular='{$this->Telf_Celular}',Operador_Telf_Casa='{$this->Operador_Telf_Casa}',Telf_Casa='{$this->Telf_Casa}',Usuario='{$this->Usuario}',
					Password1='{$this->Password}',Password_confir='{$this->Password2}'
						where Usuario = '{$this->Usuario}'");
					if (!$sql) {
						# code...

						return $this->resultado;
					}else{
						return $this->resultado=1;
					
				
			}
		}public function delete($IdUsuario){
			$this->Usuario=$IdUsuario;
			$this->status=0;
			include ("Conex_Sistem.php");
			$conexiones= new Conexion();
			$con=$conexiones->conectarse();
			$sql=pg_query($con,"UPDATE trabajador_21 set nu_estatus_12 ='{$this->status}'where af_id_usuario = '{$this->Usuario}'");
			if (!$sql) {
				# code...
				echo "Erro";
			}
			return 1;
		}

}

    ?>

