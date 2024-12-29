<?php
	include ("../../Modelo/Clase/Clases_Disponibilidad_Servicio/Disponibilidad_Servicio_Corta.php");




	$Disponibilidad = new Disponibilidad();

	$Disponibilidad->_construct($_POST['Visa_Porc'], $_POST['Visa_Aprobaciones'], $_POST['Master_Porc'], $_POST['Master_Aprobaciones'], $_POST['Maestro_Porc'], $_POST['Maestro_Aprobaciones'], $_POST['Ipg_Porc'], $_POST['Ipg_Aprobaciones'], $_POST['Porc_Time_Out'], $_POST['Time_Out'], $_POST['Banca_Internet'], $_POST['Pagina_Publica'], $_POST['Pago_Clave'], $_POST['Biopago'], $_POST['ATM'], $_POST['Suiche_7B_Adquiriente'], $_POST['Suiche_7B_Emisor'], $_POST['IST_Switch']); 
		
	$Disponibilidad->registroDisponibilidad();

	echo '<script>
alert("Registro Exitoso");
	 		location.href="../../Vista/Formularios/Disponibilidad_Servicio/Registro_Disponibilidad_Corta.html";
	 		</script>';
	
	
	
?>