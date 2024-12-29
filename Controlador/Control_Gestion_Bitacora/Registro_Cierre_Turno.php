<?php
	include ("../../Modelo/Clase/Clases_Gestion_Bitacora/Cierre_Turno.php");




	$trabajadores = new CierreTurno();

	$trabajadores->_construct($_POST['Temperatura'], $_POST['Humedad'], $_POST['BO'], $_POST['M5'], $_POST['M9'], $_POST['Produccion'], $_POST['Desarrollo'], $_POST['Calidad'], $_POST['Observaciones']); 
		
	$trabajadores->registroCierre_Turno();

	echo '<script>
alert("Registro Exitoso");
	 		location.href="../../Vista/Formularios/Gestion_Usuario/Nuevo_Usuario.html";
	 		</script>';
	
	
	
?>