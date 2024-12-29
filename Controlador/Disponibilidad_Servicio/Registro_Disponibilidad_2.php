<?php
	include ("../../Modelo/Clase/Clases_Disponibilidad_Servicio/Disponibilidad_Servicio.php");




	$trabajadores = new Disponibilidad();

	$trabajadores->_construct($_POST['P2P_Aprobadas'], $_POST['P2P_Rechazadas'], $_POST['P2P_Total'], $_POST['P2C_Aprobadas'], $_POST['P2C_Rechazadas'], $_POST['P2C_Total'], $_POST['MQ0P'], $_POST['Msj_Entregar_MQ0P'], $_POST['MQ1P'], $_POST['Msj_Entregar_MQ1P'], $_POST['Encolamiento_Tedexis'], $_POST['Instancias_Tedexis'], $_POST['Encolamiento_Total_Texto'], $_POST['Instancias_Total_Texto']); 
		
	$trabajadores->registroDisponibilidad();

	echo '<script>
alert("Registro Exitoso");
	 		location.href="../../Vista/Formularios/Registro_Disponibilidad_Part3.html";
	 		</script>';
	
	
	
?>