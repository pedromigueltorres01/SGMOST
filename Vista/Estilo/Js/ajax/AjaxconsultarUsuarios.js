var resultado1 = document.getElementById("info");
function consultarUsuario() {
            var xmlhttp;
    if(window.XMLHttpRequest)
            {
                    xmlhttp =new XMLHttpRequest();
            }else
            {
                xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function(){
            if(this.readyState  === 4 && this.status === 200){  
                resultado1.innerHTML = xmlhttp.responseText;
                
            }
        } 
        xmlhttp.open("GET", "../../../Controlador/Control_Gestion_Usuario/GestorUsuario.php?usuarios="+"usuarios", true);
        xmlhttp.send();
        //alert("si");
}
consultarUsuario();
function EditarUsuario(usuarioId){

var nombreId = "nombreId" + usuarioId;
var apellidoId = "apellidoId" + usuarioId;
var cedulaId = "cedulaId" + usuarioId;
var perfilId = "perfilId" + usuarioId;
var grupoId = "grupoId" + usuarioId;
var operador_telf_celId = "operador_telf_celId" + usuarioId;
var telefonoId = "telefonoId" + usuarioId;
var usuarioId = "usuarioId" + usuarioId;
var actualizar = "actualizar" + usuarioId;
var borrar = "borrar" + usuarioId;
var EditarnombreId = nombreId + "-editar";
var EditarapellidoId = apellidoId + "-editar";
var nombreDelUsusario =document.getElementById(nombreId).innerHTML;
var apellidoDelUsusario =document.getElementById(apellidoId).innerHTML;
var parent =document.querySelector("#" + nombreId);

if (parent.querySelector("#" + EditarnombreId) === null){
    document.getElementById(nombreId).innerHTML= '<input type="text" id="'+EditarnombreId+'" value="'+nombreDelUsusario+'">';
    document.getElementById(apellidoId).innerHTML= '<input type="text" id="'+EditarapellidoId+'" value="'+apellidoDelUsusario+'">';
    document.getElementById(borrar).disabled= "true";
    document.getElementById(actualizar).style.display ="block";
}

}