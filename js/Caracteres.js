var inputNumero = document.getElementById("RTelefono");
inputNumero.addEventListener("input", function () {
  var valor = inputNumero.value;
  valor = valor.replace(/[^0-9]/g, "");
  if (valor.length > 10) {
    valor = valor.slice(0, 10);
  }

  inputNumero.value = valor;

});


function mostrarContraseña() {
  var campoPassword = document.getElementById("Contraseña");
  var eye=document.getElementById("Img_eye");
  if(campoPassword.type=="password"){
    campoPassword.type = "text";
    eye.src="img/eyen.webp";
  }else if(campoPassword.type=="text"){
    campoPassword.type = "password";
    eye.src="img/eye.webp";
  }
  
}

function mostrarContraseña1() {
  var campoPassword = document.getElementById("Contraseña1");
  var eye=document.getElementById("Img_eye1");
  if(campoPassword.type=="password"){
    campoPassword.type = "text";
    eye.src="img/eyen.webp";
  }else if(campoPassword.type=="text"){
    campoPassword.type = "password";
    eye.src="img/eye.webp";
  }
  
}

function mostrarContraseña2() {
  var campoPassword = document.getElementById("Contraseña2");
  var eye=document.getElementById("Img_eye2");
  if(campoPassword.type=="password"){
    campoPassword.type = "text";
    eye.src="img/eyen.webp";
  }else if(campoPassword.type=="text"){
    campoPassword.type = "password";
    eye.src="img/eye.webp";
  }
  
}