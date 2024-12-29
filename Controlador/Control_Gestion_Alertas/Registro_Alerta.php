<?php
	include ("../../Modelo/Clase/Clases_Gestion_Alertas/Clases_Gestion_Alertas.php");




	$Alertas = new Alerta();

	$Alertas->_construct($_POST['Tipo_Alerta'], $_POST['Afectacion'], $_POST['Fecha_Actividad'], $_POST['Hora_Actividad'], $_POST['Nombre_Actividad'], $_POST['Personal_Acargo_BDV'], $_POST['Personal_Externo_Acargo']); 
		
	$Alertas->GenerarAlerta();

	echo '<script>
alert("Registro Exitoso");
	 		location.href="../../Vista/Formularios/Alertas/Registro_Alertas.html";
	 		</script>';
	
	
	
?>