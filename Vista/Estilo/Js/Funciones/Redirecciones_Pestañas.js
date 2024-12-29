
//--------------------------------------------------------------------------------------------//

$(document).ready(function(e) {

/*------------------Gestion Usuarios-------------------*/

            $('#Registro-Usuario').on('click', function(){
            
            $('#content').attr('src', '../../Formularios/Gestion_Usuario/Nuevo_Usuario.html');


            

            $('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
            $('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); // Agregamos el icono del Menu
            $('.navegacion .submenu').css({'left':'-320px'}); // Ocultamos los submenus
            $('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu

        });





            $('#Usuarios').on('click', function(){

            $('#content').attr('src', '../../Tablas/Tablas_Usuario/Usuarios.html');

            
            $('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
            $('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); // Agregamos el icono del Menu
            $('.navegacion .submenu').css({'left':'-320px'}); // Ocultamos los submenus
            $('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu


            }); 



            $('#Cambio-Clave-Trabajador').on('click', function(){

            $('#content').attr('src', '../../Tablas/Tablas_Usuario/Gestion_Claves_Usuarios.html');

            
            $('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
            $('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); // Agregamos el icono del Menu
            $('.navegacion .submenu').css({'left':'-320px'}); // Ocultamos los submenus
            $('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu


            }); 

            
            $('#Conexiones-Usuarios').on('click', function(){

            $('#content').attr('src', '../../Tablas/Tablas_Usuario/Conexiones_Usuarios.html');

            
            $('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
            $('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); // Agregamos el icono del Menu
            $('.navegacion .submenu').css({'left':'-320px'}); // Ocultamos los submenus
            $('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu


            }); 



/*------------------Gestion de Servicio-------------------*/


       

            $('#Registro-Disponibilidad').on('click', function(){

            $('#content').attr('src', '../../Formularios/Disponibilidad_Servicio/Registro_Disponibilidad.html');

            
            $('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
            $('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); // Agregamos el icono del Menu
            $('.navegacion .submenu').css({'left':'-320px'}); // Ocultamos los submenus
            $('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu

            


        });



            $('#Registro-Disponibilidad-Corta').on('click', function(){

            $('#content').attr('src', '../../Formularios/Disponibilidad_Servicio/Registro_Disponibilidad_Corta.html');

            
            $('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
            $('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); // Agregamos el icono del Menu
            $('.navegacion .submenu').css({'left':'-320px'}); // Ocultamos los submenus
            $('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu

            


        });






            $('#Bitacora').on('click', function(){

            $('#content').attr('src', '../../Tablas/Tablas_Bitacora/Seleccion_Bitacora.html');

            
            $('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
            $('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); // Agregamos el icono del Menu
            $('.navegacion .submenu').css({'left':'-320px'}); // Ocultamos los submenus
            $('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu

         
                    
        });






            $('#Registro-Cheklist').on('click', function(){

            $('#content').attr('src', '../../Tablas/Tablas_Cheklist/Seleccion_Cheklist.html');

            
            $('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
            $('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); // Agregamos el icono del Menu
            $('.navegacion .submenu').css({'left':'-320px'}); // Ocultamos los submenus
            $('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu

     
                    
        });







/*------------------Bitacora-------------------*/




 $('#Generacion-Alertas').on('click', function(){

            $('#content').attr('src', '../../Formularios/Alertas/Registro_Alertas.html');

            
            $('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
            $('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); // Agregamos el icono del Menu
            $('.navegacion .submenu').css({'left':'-320px'}); // Ocultamos los submenus
            $('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu

     
                    



            
           

         
                    
        });

       

    });


function cerrar(){

    
    document.getElementById("formulario") .style.display="none";
  


}


function cerrarventana(){

    
    document.getElementById("Seleccion-Bitacora") .style.display="none";
  


}


function cerrarventana(){

    
    document.getElementById("Tablas-Contenido") .style.display="none";
  


}

