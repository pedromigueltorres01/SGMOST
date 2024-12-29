<!DOCTYPE html>
<html lang="es">
<head>

    <link rel="icon" type="image/png" href="Vista/Estilo/Images/icono1.png">


  <!-- Required meta tags -->  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Required Estilos y Plugins -->
        <link rel="stylesheet" href="Vista/Estilo/Css/Formularios/Login.css">
        <link rel="stylesheet" href="Vista/Estilo/Css/Funcionabilidad/Menu.css">



        <link rel="stylesheet" href="Estilo/Plugins/Sweetalert2/sweetalert2.min.css">        
        <script src="Vista/Estilo/Plugins/Jquery/jquery-3.2.1.min.js"></script>    
 		<script src="Vista/Estilo/Plugins/Sweetalert2/sweetalert2.all.min.js"></script>    
        <script src="Vista/Estilo/Js/Funciones/Funcionabilidad_Login.js"></script> 
        
    </head>
    
    <body>
     
      <div class="container-login">
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin" action="Controlador/Control_Gestion_Usuario/gestorUsuarios" method="post" autocomplete="off">
                
                <span class="login-form-title">SGMOST BDV</span>
                <span class="login-form-title">Inicio de Sesion</span>
                
                
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario" onkeyup="javascript:this.value=this.value.toUpperCase();" onkeypress="return check(event)>
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password"
                    onkeypress="return check(event)>
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="Sesion" class="login-form-btn">CONECTAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>     
        
        
   
    </body>
</html>