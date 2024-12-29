<?php
	include ("../../Modelo/Clase/Clases_Disponibilidad_Servicio/Disponibilidad_Servicio.php");




	$trabajadores = new Disponibilidad();

	$trabajadores->_construct($_POST['Cantv'], $_POST['Movilnet'], $_POST['Conatel'], $_POST['Digitel'], $_POST['Seniat'], $_POST['Movistar'], $_POST['Corpoelec'], $_POST['Billetera_Movil'], $_POST['Hidrocapital'], $_POST['Max_Task_Global'], $_POST['Cpu'], $_POST['Temperatura'], $_POST['Transacciones_Cics'], $_POST['Total_Agencias'], $_POST['Porc_Agencias'], $_POST['Enlaces_Operativos'], $_POST['Porc_Operativos'], $_POST['Enlaces_Inoperativos'], $_POST['Porc_Operativos']); 
		
	$trabajadores->registroDisponibilidad();

	echo '<script>
alert("Registro Exitoso");
	 		location.href="../../Vista/Pagina_Principal.html";
	 		</script>';
	
	
	
?>