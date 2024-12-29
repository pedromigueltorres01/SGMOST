<?php
	include ("../../Modelo/Clase/Clases_Gestion_Bitacora/Inicio_Turno.php");




	$trabajadores = new Turno();

	$trabajadores->_construct($_POST['Turno'], $_POST['Temperatura'], $_POST['Humedad'], $_POST['BO'], $_POST['M5'], $_POST['M9'], $_POST['Produccion'], $_POST['Desarrollo'], $_POST['Calidad']); 
		
	$trabajadores->registroTurno();

	echo '<script>
alert("Registro Exitoso");
	 		location.href="../../Vista/Formularios/Gestion_Usuario/Nuevo_Usuario.html";
	 		</script>';
	
	
	
?>