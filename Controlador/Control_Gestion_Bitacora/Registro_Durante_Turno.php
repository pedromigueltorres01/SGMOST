<?php
	include ("../../Modelo/Clase/Clases_Gestion_Bitacora/Durante_Turno.php");




	$trabajadores = new Documentacion();

	$trabajadores->_construct($_POST['Gestion_Monitoreo'], $_POST['Gestion_Seguridad'], $_POST['Gestion_Seguimiento']); 
		
	$trabajadores->registroDocumentacion();

	echo '<script>
alert("Registro Exitoso");
	 		location.href="../../Vista/Formularios/Gestion_Usuario/Nuevo_Usuario.html";
	 		</script>';
	
	
	
?>