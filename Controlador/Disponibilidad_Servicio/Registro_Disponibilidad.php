<?php
	include ("../../Modelo/Clase/Clases_Disponibilidad_Servicio/Disponibilidad_Servicio.php");




	$trabajadores = new Disponibilidad();

	$trabajadores->_construct($_POST['Visa_Porc'], $_POST['Visa_Aprobaciones'], $_POST['Master_Porc'], $_POST['Master_Aprobaciones'], $_POST['Ipg_Aprobaciones'], $_POST['Ipg_Porc'], $_POST['Ipg_Aprobaciones'], $_POST['Porc_Time_Out'], $_POST['Time_Out'], $_POST['IST_Switch'], $_POST['Suiche_7B_Adquiriente'], $_POST['Suiche_7B_Emisor'], $_POST['Empresarial'], $_POST['Acceso_Empresarial'], $_POST['Usuarios_Activos'], $_POST['Usuarios_Login'], $_POST['Posición_Consolidada'], $_POST['Movimientos_Cuentas'], $_POST['Usuarios_Transando']); 
		
	$trabajadores->registroDisponibilidad();

	echo '<script>
alert("Registro Exitoso");
	 		location.href="../../Vista/Formularios/Registro_Disponibilidad_Part2.html";
	 		</script>';
	
	
	
?>