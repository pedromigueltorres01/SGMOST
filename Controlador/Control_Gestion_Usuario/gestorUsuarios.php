<?php
//print_r($_POST);
if (isset($_POST['Sesion'])) {
	# code...
	if (isset($_POST['usuario']) &&
		isset($_POST['password'])&&
		!empty($_POST['usuario'])&&
		!empty($_POST['password'])) {
		# code...
		$usuario =$_POST['usuario'];
		$password=$_POST['password'];
		include_once('../../Modelo/Clase/Clases_Gestion_Usuario/sessionUsuario.php');
		$validar=new SessionUsuario();
		$resultado=$validar->session($usuario,$password);
		if ($resultado==false) {
			# code...
			?>
				<script type="text/javascript">
					alert('Datos incorrectos!');
					window.location="../../";
				</script>
			<?php
			
		}else{
			header('location:../../Vista/Roles-Sytem/Administrador_Control_System/Pagina_Principal_Control_System');
			
		}
		
	}
	else{
		header('location:../../');
	}
}


?>