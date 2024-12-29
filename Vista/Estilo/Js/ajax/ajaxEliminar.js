var resultado1 = document.getElementById("info");
function Eliminar(UsuarioE){		
    			var xmlhttp;
        if(window.XMLHttpRequest)
                {
                        xmlhttp =new XMLHttpRequest();
                }else
                {
                    xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
                }
    	
    
         
       // var EliminarUsu="eliminar"; 
        var Eliminar="Eliminar1";    
   
        var informacionDelUsuario ="eliminar="+Eliminar+"&IdUsuario="+UsuarioE;
       //alert(informacionDelUsuario);
        xmlhttp.onreadystatechange = function(){
            if(this.readyState  === 4 && this.status === 200){ 

                var mensaje = this.responseText;
                resultado1.innerHTML = mensaje;


            }
        } 
        xmlhttp.open("POST", "../../../Controlador/Control_Gestion_Usuario/GestorUsuario.php", true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(informacionDelUsuario);		   
} 