
        # code...
    
    # code...
    include ("../../Modelo/Clase/Clases_Gestion_Usuario/Control_Usuario.php");
    $consul =new Trabajador();
    $sql1=$consul->BusquedaEspecica($datoUsuario);
    if (empty($sql1)) {
        # respuesta en caso que no se encuentre el usuario.
        echo"Usuario no encontrado!";
    }else{
        
      
       }
       $formu="";
        while ($fila =pg_fetch_assoc($sql1)) {
            # code...
$formu .='<form action="" id="formulario" name="formulario" method="post" onsubmit="event.preventDefault();onFormSubmit();>';

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

        $formu .='<br><h3><span class="fas fa-map-marker-alt icon-menu">  Direccion</h3>';

        $formu .='<div class="Direccion-Trabajador">';
        $formu .='<input type="text" name="Estado" value="'.$fila['estado'].'" id="Estado"  placeholder="Estado" >';

        $formu .='<input type="text" name="Municipio" value="'.$fila['municipio'].'" id="Municipio"  placeholder="Municipio" >';
        $formu .='<input type="text" name="Ciudad" value="'.$fila['ciudad'].'" id="Ciudad"  placeholder="Ciudad" >';

        $formu .='<input type="text" id="Calle" name="Calle" value="'.$fila['calle'].'"  id="Casa"   placeholder="Calle" >';
        $formu .='<input type="text" name="Urbanizacion" value="'.$fila['urbanizacion'].'"  id="Urbanizacion"  placeholder="Urbanizacion" >';
        $formu .='<input type="text" name="Casa" value="'.$fila['casa'].'"  id="Casa"  placeholder="Casa/Apartamento" >';
        $formu .='<span class="barra"></span></div>';

   


       $formu .=' </br><button type="submit" id="modificar" value="modificar"onclick="Modificar()">Modificar</button>';
        $formu .='</form>';
         echo $formu ;


