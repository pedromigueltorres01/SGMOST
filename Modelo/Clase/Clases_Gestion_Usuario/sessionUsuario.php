<?php
session_start();
class SessionUsuario{
	private $usuario;
	private $password;
	private $status;
	private $con;
	public $resultado=false;
	public function session($usuario,$password){
		$this->$usuario=$usuario;
		$this->$password=$password;
		include_once('Conex_Sistem.php');
		$conex=new Conexion();
		$con=$conex->conectarse();
		$query=pg_query($con,"SELECT Usuario,Password1,Primer_Nombre,Primer_Apellido,Perfil,status FROM usuarios WHERE Usuario ='$usuario'");
		if (!$query){
					
						?>
						<!--<script type="text/javascript">
							alert('Error en Session!');
							window.location='../../';
						</script>
						<?php
					

						}if (pg_num_rows($query)==!0 ){
							# code...
							$DatosSession=pg_fetch_array($query);
							
			if ($DatosSession[0]== $usuario &&   $DatosSession[5] == 1) {
								# code...
				if (password_verify($password, $DatosSession[1])  ) {
					# code...
					$_SESSION['NM']=$DatosSession[0];
						$_SESSION['Nombre']=$DatosSession[2];
						$_SESSION['apellido']=$DatosSession[3];
						$_SESSION['perfil']=$DatosSession[4];
						
								pg_close($con);
								return $this->resultado=true;
				}else
				{
					return $this->resultado;
				}
								
						

								

							}
						}else{
					
							pg_close($con);
							return $this->resultado;
						}



	}
}


?>