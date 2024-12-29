<?php
//print_r($_GET);
$table ="";


if (isset($_POST['BuscarUsuarioAmodificar'])) {
	# code...
	$BuscarUsuarioAmodificar=$_POST['BuscarUsuarioAmodificar'];
	$datoUsuario=$_POST['Usuario1'];
}if (isset($_POST['modificarUsuario'])) {
	# code...
	$modificarUsuario=$_POST['modificarUsuario'];
}if (isset($_POST['eliminar'])) {
	# code...
	$eliminarUsuario=$_POST['eliminar'];
	$IdUsuario=$_POST['IdUsuario'];
	
}

 //controlador guardar registro de usuario
if (isset($_POST['registrar'])){
	# code...
	

		
			
			if(isset($_POST['Primer_Nombre'])&&
				isset($_POST['Primer_Apellido'])&&
				isset($_POST['Nacionalidad'])&&
				isset($_POST['Cedula'])&&
				isset($_POST['Perfil'])&&
				isset($_POST['grupo'])&&
				isset($_POST['Fecha_Nacimiento'])&&
				isset($_POST['Fecha_Ingreso'])&&
				isset($_POST['Usuario'])&&
				isset($_POST['Password'])&&
				isset($_POST['Password_Verificacion'])&&
				!empty($_POST['Primer_Nombre'])&&
				!empty($_POST['Primer_Apellido'])&&
				!empty($_POST['Nacionalidad'])&&
				!empty($_POST['Cedula'])&&
				!empty($_POST['Perfil'])&&
				!empty($_POST['grupo'])&&
				!empty($_POST['Fecha_Nacimiento'])&&
				!empty($_POST['Fecha_Ingreso'])&&
				!empty($_POST['Usuario'])&&
				!empty($_POST['Password'])&&
				!empty($_POST['Password_Verificacion'])
				
				){
				include ("../../Modelo/Clase/Clases_Gestion_Usuario/Control_Usuario.php");
				$Primer_Nombre=$_POST['Primer_Nombre'];
				$Segundo_Nombre=$_POST['Segundo_Nombre'];
				$Primer_Apellido=$_POST['Primer_Apellido'];
				$Segundo_apellido=$_POST['Segundo_apellido'];
				$Nacionalidad=$_POST['Nacionalidad'];
				$Cedula=$_POST['Cedula'];
				$Perfil=$_POST['Perfil'];
				$grupo=$_POST['grupo'];
				$Fecha_Nacimiento=$_POST['Fecha_Nacimiento'];
				$Fecha_Ingreso=$_POST['Fecha_Ingreso'];
				$Operador_Telf_Cel=$_POST['Operador_Telf_Cel'];
				$Telf_Celular=$_POST['Telf_Celular'];
				$Operador_Telf_Casa=$_POST['Operador_Telf_Casa'];
				$Telf_Casa=$_POST['Telf_Casa'];
				$Usuario=$_POST['Usuario'];
				$Password1=$_POST['Password'];
				$Password_Verificacion=$_POST['Password_Verificacion'];
				
				

				$trabajadores= new Trabajador(); 
				$resultado=$trabajadores->registroPersonal($Primer_Nombre,
					$Segundo_Nombre,
					$Primer_Apellido,
					$Segundo_apellido,
					$Nacionalidad,
					$Cedula,
					$Perfil,
					$grupo,
					$Fecha_Nacimiento,
					$Fecha_Ingreso,
					$Operador_Telf_Cel,
					$Telf_Celular,
					$Operador_Telf_Casa,
					$Telf_Casa,
					$Usuario,
					$Password1,
					$Password_Verificacion
					);
				if ($resultado==false) {
					# code...
					?>
				<div class="Yaexiste"><p ><?php echo "El usario ya exite, o esta inactivo!"; ?></div></p>
				<?php 
				}elseif ($resultado==true) {
					# code...
					?>
				<div class="registro"><p ><?php echo "El usuario se registró correctamente!"; ?></div></p>
				<?php 
				}
				

			
			} else
			{
				?>
				<div class="CampoVacio"><p ><?php echo "Asegurese de llenar todos los campos!"; ?></div></p>
				<?php 

	
		}
}//Control consulta usuario
if (isset($_GET['usuarios'])) {
$nombreId="nombreId";
$apellidoId="apellidoId";
$cedulaId="cedulaId";
$perfilId="perfilId";
$grupoId="grupoId";
$fecha_ingresoId="fecha_ingresoId";
$operador_telf_celId="operador_telf_celId";
$telefonoId="telefonoId";
$usuarioId="usuarioId";

$actualizar="actualizar";
$borrar="borrar";
	# code...
	include ("../../Modelo/Clase/Clases_Gestion_Usuario/Control_Usuario.php");
	$consul =new Trabajador();
	$sql=$consul->consultar();
	
	$table .='<div class="table100">';
			$table .='<table>';
				$table .='<thead>';
					$table .='<tr class="table100-head">';

					$table .='<th class="column1">ID</th>';
					$table .='<th class="column2">Nombres</th>';
					$table .='<th class="column3">Apellidos</th>';
					$table .='<th class="column4">Cedula</th>';
					$table .='<th class="column5">Peril</th>';
					$table .='<th class="column6">Grupo</th>';
					$table .='<th class="column7">Fecha  Ingreso</th>';
					$table .='<th class="column7">Operador</th>';
					$table .='<th class="column8">Telf. Celular</th>';
					$table .='<th class="column9">Usuario</th>';
					
					$table .='<th class="column10">Borra Usuario </th>';

					
					$table .='</tr>';			

				$table .='</thead>';
				
						$table.='<tbody>';
							
							
		$nro=1;
			while ($rows=pg_fetch_assoc($sql)) {
									# code...
									
								
								

$table .='<tr>';
	$table .='<td class="column1">'.$nro.'</td>';

$table .='<td id="'.$nombreId.$rows['usuario'].'" class="column2">'.$rows['primer_nombre'].'</td>';

$table .='<td id="'.$apellidoId.$rows['usuario'].'" class="column3">'.$rows['primer_apellido'].'</td>';

$table .='<td id="'.$cedulaId.$rows['usuario'].'" class="column4">'.$rows['cedula'].'</td>';

$table .='<td id="'.$perfilId.$rows['usuario'].'" class="column5">'.$rows['perfil'].'</td>';

$table .='<td id="'.$grupoId.$rows['usuario'].'" class="column5">'.$rows['grupo'].'</td>';

$table .='<td id="'.$fecha_ingresoId.$rows['usuario'].'" class="column6">'.$rows['fecha_ingreso'].'</td>';

$table .='<td id="'.$operador_telf_celId.$rows['usuario'].'"  class="column7">'.'0'.$rows['operador_telf_cel'].'</td>';

$table .='<td id="'.$telefonoId.$rows['usuario'].'" class="column7">'.$rows['telf_celular'].'</td>';

$table .='<td id="'.$usuarioId.$rows['usuario'].'" class="column8">'.$rows['usuario'].'</td>';



$table .='<td><input id="'.$rows['usuario'].'" onclick="Eliminar(this.id)" type="button" value="Borra"/></td>';



		$table .='</tr>';
	
	$nro++;
				
		}

	}
	echo $table;
if (isset($BuscarUsuarioAmodificar)) {
	if (empty($datoUsuario)) {                      
		echo "Esegurese de Ingresar el NM ó C.I";  
        }else{

        # code..
    include ("../../Modelo/Clase/Clases_Gestion_Usuario/Control_Usuario.php");
    $consul =new Trabajador();
    $sql1=$consul->BusquedaEspecica($datoUsuario);
    if (empty($sql1)) {
        # respuesta en caso que no se encuentre el usuario.
        echo"Usuario no encontrado!";
    }else{
        
      
       
       $formu="";
        while ($fila =pg_fetch_assoc($sql1)) {
            # code...
$formu .='<form action="" id="formulario" name="formulario" method="post"  onsubmit="event.preventDefault();onFormSubmit();">';

$formu .='<div class="form">';
           
$formu .='<h3><span class="fas fa-user icon-menu">  Datos de Usuario</h3>';
           
$formu .='<div class="Grupo-Usaurio">';

  $formu .='<h4>Nombre</h4>';
$formu .='<div class="Nombre-Trabajador">';
$formu .='<input type="text" name="Primer_Nombre" value="'.$fila["primer_nombre"].'" id="Primer_Nombre"  placeholder="Primer Nombre" autofocus required>';

$formu .=' <input type="text" name="Segundo_Nombre" value="'.$fila["segundo_nombre"].'"  id="Segundo_Nombre"  placeholder="Segundo Nombre" >';
$formu .='<span class="barra"></span></div>';

$formu .='<h4></span>Apellido</h4>';
         $formu .='<div class="Apellido-Trabajador">';

   $formu .='<input type="text" name="Primer_Apellido"  id="Primer_Apellido" value="'.$fila['primer_apellido'].'" placeholder="Primer Apellido" autofocus required>';

 $formu .='<input type="text" name="Segundo_apellido"  id="Segundo_apellido"  placeholder="Segundo Apellido" value="'.$fila['segundo_apellido'].'" >';
  $formu .='<span class="barra"></span></div>';
 
$formu .='<h4>Cedula</h4>';
$formu .='<div class="Cedula-Trabajador">';
$formu .='<select type="text" name="Nacionalidad" id="Nacionalidad" required><span class="barra"></span>
                        <option value="">...</option>
                        <option value="V-">V-</option>
                        <option value="E-">E-</option>
                        </select> ';

        
$formu .='<input type="text" name="Cedula"  id="Cedula"  placeholder="Cedula de Trabajador" value="'.$fila['cedula'].'" autofocus required>';
$formu .='<span class="barra"></span></div>';

$formu .='<h4>Perfil</h4>';
$formu .='<div class="Perfil-Grupo-Trabajador">';
        

$formu .='<select type="text" name="Perfil" id="Perfil" autofocus required><span class="barra"></span>

                        <option value="">...</option>
                        <option value="Admin">Admin</option>
                        <option value="Analista">Analista</option>
                        <option value="Especialista">Especialista</option>
                        <option value="Gerente">Gerente</option>

                    </select>';


$formu .='<h4>Grupo</h4>'; 

$formu .='<select type="text" name="Grupo" id="Grupo" ><span class="barra"></span>

                        <option value="">...</option>
                        <option value="Grupo 1">Grupo 1</option>
                        <option value="Grupo 2">Grupo 2</option>
                        <option value="Grupo 3">Grupo 3</option>
                        <option value="Grupo 4">Grupo 4</option>
                        <option value="Grupo 5">Grupo 5</option>

                    </select></div>';


$formu .='<h4>Fecha Nacimiento</h4>';
$formu .='<div class="Fecha-Trabajador">
        

        <input type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento" autofocus required /><span class="barra"></span></div>';
$formu .='<h4>Fecha Ingreso</h4>';
$formu .='  <div class="Fecha-Trabajador">
        

        <input type="date" name="Fecha_Ingreso" id="Fecha_Ingreso" autofocus required /><span class="barra"></span></div>';

$formu .='<h4>Telef. Celular</h4>';
$formu .=' <div class="Telefono-Trabajador">';
        
$formu .=' <select type="text" name="Operador_Telf_Cel" id="Operador_Telf_Cel" autofocus required><span class="barra"></span>

                        <option value="">...</option>
                        <option value="0412">0412</option>
                        <option value="0424">0424</option>
                        <option value="0414">0414</option>
                        <option value="0426">0426</option>
                        <option value="0416">0416</option>
                        </select> ';


$formu .='<input type="text" name="Telf_Celular"  id="Telf_Celular"  placeholder="Telf. Celular de Trabajador" value="'.$fila['telf_celular'].'" autofocus required>';
$formu .='<span class="barra"></span></div>';

$formu .='<h4>Telef. casa</h4>';
$formu .='<div class="Telefono-Trabajador">';
        
$formu .='<select type="text" name="Operador_Telf_Casa" id="Operador_Telf_Casa"  ><span class="barra"></span>

                        <option value="">...</option>
                        <option value="0212">0212</option>
                        <option value="0234">0234</option>
                        </select>';


$formu .='<input type="text" name="Telf_Casa"  id="Telf_Casa"  placeholder="Telf. Casa Trabajador" value="'.$fila['telf_casa'].'" >';
$formu .='<span class="barra" ></span></div>';


$formu .='<h4>Usuario-Trabajador</h4>';
$formu .='<div class="Usuario-Trabajador">';
        
$formu .='<input type="text" id="Usuario" name="Usuario"  value="'.$fila['usuario'].'"    placeholder="Usuario" autofocus required></div>';


       $formu .=' <h4>Contraseña</h4>';
        $formu .='<div class="Password-Trabajador">';
        
        $formu .='<input type="password"  value="'.$fila['password1'].'" name="Password"  id="Password"  placeholder="Nueva Contraseña" autofocus required>';

        $formu .='<input type="password"  value="'.$fila['password_confir'].'" name="password_verificacion"  id="Password_Verificacion"  placeholder="Verif. Contraseña" autofocus required>';
        $formu .='<span class="barra"></span></div>';



$formu .=' </div>';

       

   


       $formu .=' </br><button type="submit" id="modificar" value="modificar"onclick="Modificar()">Modificar</button>';
        $formu .='</form>';
         

        } 
        echo $formu ;
       }
     }       	
}
if(!empty($modificarUsuario)){
	if(isset($_POST['Primer_Nombre'])&&
				isset($_POST['Primer_Apellido'])&&
				isset($_POST['Nacionalidad'])&&
				isset($_POST['Cedula'])&&
				isset($_POST['Perfil'])&&
				isset($_POST['grupo'])&&
				isset($_POST['Fecha_Nacimiento'])&&
				isset($_POST['Fecha_Ingreso'])&&
				isset($_POST['Usuario'])&&
				isset($_POST['Password'])&&
				isset($_POST['Password_Verificacion'])&&
				!empty($_POST['Primer_Nombre'])&&
				!empty($_POST['Primer_Apellido'])&&
				!empty($_POST['Nacionalidad'])&&
				!empty($_POST['Cedula'])&&
				!empty($_POST['Perfil'])&&
				!empty($_POST['grupo'])&&
				!empty($_POST['Fecha_Nacimiento'])&&
				!empty($_POST['Fecha_Ingreso'])&&
				!empty($_POST['Usuario'])&&
				!empty($_POST['Password'])&&
				!empty($_POST['Password_Verificacion'])
				){
				include ("../../Modelo/Clase/Clases_Gestion_Usuario/Control_Usuario.php");
				$Primer_Nombre=$_POST['Primer_Nombre'];
				$Segundo_Nombre=$_POST['Segundo_Nombre'];
				$Primer_Apellido=$_POST['Primer_Apellido'];
				$Segundo_apellido=$_POST['Segundo_apellido'];
				$Nacionalidad=$_POST['Nacionalidad'];
				$Cedula=$_POST['Cedula'];
				$Perfil=$_POST['Perfil'];
				$grupo=$_POST['grupo'];
				$Fecha_Nacimiento=$_POST['Fecha_Nacimiento'];
				$Fecha_Ingreso=$_POST['Fecha_Ingreso'];
				$Operador_Telf_Cel=$_POST['Operador_Telf_Cel'];
				$Telf_Celular=$_POST['Telf_Celular'];
				$Operador_Telf_Casa=$_POST['Operador_Telf_Casa'];
				$Telf_Casa=$_POST['Telf_Casa'];
				$Usuario=$_POST['Usuario'];
				$Password1=$_POST['Password'];
				$Password_Verificacion=$_POST['Password_Verificacion'];
				$trabajadores= new Trabajador(); 
				$resultado111=$trabajadores->modificar($Primer_Nombre,
					$Segundo_Nombre,
					$Primer_Apellido,
					$Segundo_apellido,
					$Nacionalidad,
					$Cedula,
					$Perfil,
					$grupo,
					$Fecha_Nacimiento,
					$Fecha_Ingreso,
					$Operador_Telf_Cel,
					$Telf_Celular,
					$Operador_Telf_Casa,
					$Telf_Casa,
					$Usuario,
					$Password1,
					$Password_Verificacion,
					);
			if ($resultado111===false) {
				# code...
				echo "No se pudo modificar los datos del usuario";
			}else{
				echo "Los datos se modificaron satisfactoriamente";
			}
	}else
	{
		echo "Asegurese de llena Todos los campos";
	}
}if (!empty($eliminarUsuario)) {
	# code...
	if (empty($IdUsuario)) {
		# code...
		consultarUsuario();
	}else{
		include ("../../Modelo/Clase/Clases_Gestion_Usuario/Control_Usuario.php");
		$deleUs= new Trabajador();
		$IdUsuario=$deleUs->delete($IdUsuario);
		echo "Usuario ELilinado ".$IdUsuario;
		
		consultarUsuario();
	}

	



}
?>