<?php
	include ("../../Modelo/Clase/Clases_Gestion_Bitacora/Grupo_Guardia.php");




	$trabajadores = new Guardia();

	$trabajadores->_construct($_POST['Supervisor'], $_POST['Primer_Integrante'], $_POST['Segundo_Integrante'], $_POST['Tercer_Integrante'], $_POST['Cuarto_Integrante'], $_POST['Primer_Gention'], $_POST['Segundo_Gention'], $_POST['Primer_Monitoreo'], $_POST['Segundo_Monitoreo']); 
		
	$trabajadores->registroGuardia();

	echo '<script>
alert("Registro Exitoso");
	 		location.href="../../Vista/Formularios/Gestion_Usuario/Nuevo_Usuario.html";
	 		</script>';
	
	
	
?>