<!DOCTYPE html>
<html lang="es">
<head>

    <link rel="icon" type="image/png" href="../../../Vista/Estilo/Images/icono1.png">


  <!-- Required meta tags -->  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Required Estilos y Plugins -->

    
    <link rel="stylesheet" href="../../../Vista/Estilo/Css/Formularios/Formulario_Usuario.css">

    <link rel="stylesheet" href="../../../Vista/Estilo/Plugins/Fontawesome/css/fontawesome.css">

    <link rel="stylesheet" href="../../../Vista/Estilo/Plugins/Fontawesome/css/regular.css">

    <link rel="stylesheet" href="../../../Vista/Estilo/Plugins/Fontawesome/css/solid.css">

    <script src="../../../Vista/Estilo/Plugins/Jquery/jquery-3.2.1.js"></script>
    <script src="../../../Vista/Estilo/Js/Funciones/Redirecciones_Pestañas.js"></script>



    <title>Nuevo Usuario</title>


</head>
    
<body>
   <div class="form">
        <div id="cerrar"><a href="ONCLICK='cerrar()'"><img src="../../../Vista/Estilo/Images/logo cierre.png"></a></div>



            <h1><span class="fas fa-user-edit icon-menu">  Modificar Usuario</h1></span>
           
            <center>
                <form id="formulario" name="formulario" method="post"
                onsubmit="event.preventDefault();onFormSubmit();">
                    <input type="text" name="Usuario"  id="Usuario1"  placeholder="Usuario" onkeyup="javascript:this.value=this.value.toUpperCase();" autofocus required >
                    </br><button type="submit" id="buscar" value="buscar" onclick="BuscarAModificar();cerrar();">Buscar</button>

                </form>
                <div id="info">
                </center>
            
            </div>
<script src="../../../Vista/Estilo/Js/ajax/modificarUsuario.js"></script>

   <!--

        <form action="../../../Controlador/Control_Gestion_Usuario/Registro_Usuario.php"id="formulario" name="formulario" method="post">

        <div class="form">
        <div id="cerrar"><a href="javascript:cerrar()"><img src="../../../Vista/Estilo/Images/logo cierre.png"></a>



            <h1><span class="fas fa-user-edit icon-menu">  Nuevo Usuario</h1>
            <h3><span class="fas fa-user icon-menu">  Datos de Usuario</h3>
             
<div class="Grupo-Usaurio">

        <h4>Nombre</h4>
        <div class="Nombre-Trabajador">
        
        <input type="text" name="Primer_Nombre"  id="Primer_Nombre"  placeholder="Primer Nombre" autofocus required>

        <input type="text" name="Segundo_Nombre"  id="Segundo_Nombre"  placeholder="Segundo Nombre" ><span class="barra"></span></div>



        <h4></span>Apellido</h4>
        <div class="Apellido-Trabajador">

        <input type="text" name="Primer_Apellido"  id="Primer_Apellido"placeholder="Primer Apellido" autofocus required>

        <input type="text" name="Segundo_apellido"  id="Segundo_apellido"  placeholder="Segundo Apellido" ><span class="barra"></span></div>

        <h4>Cedula</h4>
        <div class="Cedula-Trabajador">
        <select type="text" name="Nacionalidad" id="Nacionalidad" required><span class="barra"></span>
                        <option value="">...</option>
                        <option value="V-">V-</option>
                        <option value="E-">E-</option>
                        </select> 

        
        <input type="text" name="Cedula"  id="Cedula"  placeholder="Cedula de Trabajador" autofocus required><span class="barra"></span></div>

        <h4>Perfil</h4> 
        <div class="Perfil-Grupo-Trabajador">
        

        <select type="text" name="Perfil" id="Perfil" autofocus required><span class="barra"></span>

                        <option value="">...</option>
                        <option value="Analista">Analista</option>
                        <option value="Especialista">Especialista</option>
                        <option value="Gerente">Gerente</option>

                    </select>


        <h4>Grupo</h4> 

        <select type="text" name="Grupo" id="Grupo" ><span class="barra"></span>

                        <option value="">...</option>
                        <option value="Grupo 1">Grupo 1</option>
                        <option value="Grupo 2">Grupo 2</option>
                        <option value="Grupo 3">Grupo 3</option>
                        <option value="Grupo 4">Grupo 4</option>
                        <option value="Grupo 5">Grupo 5</option>

                    </select></div>


        <h4>Fecha Nacimiento</h4>
        <div class="Fecha-Trabajador">
        

        <input type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento" autofocus required /><span class="barra"></span></div>

        <h4>Fecha Ingreso</h4>
        <div class="Fecha-Trabajador">
        

        <input type="date" name="Fecha_Ingreso" id="Fecha_Ingreso" autofocus required /><span class="barra"></span></div>

        <h4>Telef. Celular</h4>
        <div class="Telefono-Trabajador">
        
        <select type="text" name="Operador_Telf_Cel" id="Operador_Telf_Cel" autofocus required><span class="barra"></span>

                        <option value="">...</option>
                        <option value="0412">0412</option>
                        <option value="0424">0424</option>
                        <option value="0414">0414</option>
                        <option value="0426">0426</option>
                        <option value="0416">0416</option>
                        </select> 


        <input type="text" name="Telf_Celular"  id="Telf_Celular"  placeholder="Telf. Celular de Trabajador" autofocus required><span class="barra"></span></div>

        <h4>Telef. casa</h4>
        <div class="Telefono-Trabajador">
        
        <select type="text" name="Operador_Telf_Casa" id="Operador_Telf_Casa" ><span class="barra"></span>

                        <option value="">...</option>
                        <option value="0212">0212</option>
                        <option value="0234">0234</option>
                        </select> 


        <input type="text" name="Telf_Casa"  id="Telf_Casa"  placeholder="Telf. Casa Trabajador" ><span class="barra" ></span></div>


        <h4>Usuario-Trabajador</h4>
        <div class="Usuario-Trabajador">
        
        <input type="text" name="Usuario"  id="Usuario"  placeholder="Usuario" autofocus required></div>


        <h4>Contraseña</h4>
        <div class="Password-Trabajador">
        
        <input type="password" name="Password"  id="Password"  placeholder="Nueva Contraseña" autofocus required>

        <input type="password" name="Password_Verificacion"  id="Password_Verificacion"  placeholder="Verif. Contraseña" autofocus required><span class="barra"></span>
        </div>



 </div>

        <br><h3><span class="fas fa-map-marker-alt icon-menu">  Direccion</h3>

        <div class="Direccion-Trabajador">
        <input type="text" name="Estado"  id="Estado"  placeholder="Estado" >
        <input type="text" name="Municipio"  id="Municipio"  placeholder="Municipio" >
        <input type="text" name="Ciudad"  id="Ciudad"  placeholder="Ciudad" >
        <input type="text" name="Calle"  id="Calle"  placeholder="Calle" >
        <input type="text" name="Urbanizacion"  id="Urbanizacion"  placeholder="Urbanizacion" >
        <input type="text" name="Casa"  id="Casa"  placeholder="Casa/Apartamento" >
        <span class="barra"></span></div>

   


            </br><button type="submit">GUARDAR</button><button type="reset">Limpiar</button>
        </form>

-->
 

</body>
</html>