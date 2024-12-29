window.onload = function() {
  var myInput = document.getElementById('usuario');
  var myInputb = document.getElementById('password');
  myInput.onpaste = function(e) {
    e.preventDefault();
    alert("esta acción está prohibida");
  }  
  myInput.oncopy = function(e) {
    e.preventDefault();
    alert("esta acción está prohibida");
  }
  myInputb.onpaste = function(e) {
    e.preventDefault();
    alert("esta acción está prohibida");
  }  
  myInputb.oncopy = function(e) {
    e.preventDefault();
    alert("esta acción está prohibida");
  }
}

function check(e) {
	tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
        return true;
    }
    patron =/[A-Za-z0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}