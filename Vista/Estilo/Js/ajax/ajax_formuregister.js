var resultado1 = document.getElementById("info");
function ajax(){		
    			var xmlhttp;
        if(window.XMLHttpRequest)
                {
                        xmlhttp =new XMLHttpRequest();
                }else
                {
                    xmlhttp =new   ActiveXObject("Microsoft.XMLHTTP");
                }
    //alert('si');	
        var a = document.getElementById("Primer_Nombre").value;
        var b = document.getElementById("Segundo_Nombre").value;
        var c = document.getElementById("Primer_Apellido").value;
        var d = document.getElementById("Segundo_apellido").value;
        var e = document.getElementById("Nacionalidad").value;
        var f = document.getElementById("Cedula").value;
        var g = document.getElementById("Perfil").value;
        var h = document.getElementById("Grupo").value;
        var i =document.getElementById("Fecha_Nacimiento").value;
        var j =document.getElementById("Fecha_Ingreso").value;
        var k =document.getElementById("Operador_Telf_Cel").value;
        var l =document.getElementById("Telf_Celular").value;
        var m = document.getElementById("Operador_Telf_Casa").value;
        var n = document.getElementById("Telf_Casa").value;
        var o = document.getElementById("Usuario").value;
        var p = document.getElementById("Password").value;
        var q = document.getElementById("Password_Verificacion").value;
        var w = document.getElementById("registrar").value;       
       // var h = document.getElementById("cargo").value;
      // alert(a+b+c+d+e+f+g+h+i+j+k+l+m+n+o+p+q+r+s+t+u+v+x+v);
        var informacionDelUsuario =
        "Primer_Nombre="+a+
        "&Segundo_Nombre="+b+
        "&Primer_Apellido="+c+
        "&Segundo_apellido="+d+
        "&Nacionalidad="+e+
        "&Cedula="+f+
        "&Perfil="+g+
        "&grupo="+h+
        "&Fecha_Nacimiento="+i+
        "&Fecha_Ingreso="+j+
        "&Operador_Telf_Cel="+k+
        "&Telf_Celular="+l+
        "&Operador_Telf_Casa="+m+
        "&Telf_Casa="+n+
        "&Usuario="+o+
        "&Password="+p+
        "&Password_Verificacion="+q+
        "&registrar="+w;
       alert(informacionDelUsuario);
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

