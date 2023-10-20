var inputNumero = document.getElementById("campo_codigo");
inputNumero.addEventListener("input", function () {
  var valor = inputNumero.value;
  valor = valor.replace(/[^0-9]/g, "");
  if (valor.length > 10) {
    valor = valor.slice(0, 10);
  }

  inputNumero.value = valor;

});

var inputNumero = document.getElementById("cantidad");
inputNumero.addEventListener("input", function () {
  var valor = inputNumero.value;
  valor = valor.replace(/[^0-9]/g, "");
  if (valor.length > 10) {
    valor = valor.slice(0, 10);
  }

  inputNumero.value = valor;

});
//=Restriccion fecha=============================
function obtenerFechaActual() {
    const now = new Date();
    const year = now.getFullYear();
    const month = (now.getMonth() + 1).toString().padStart(2, '0');
    const day = now.getDate().toString().padStart(2, '0');
    return `${year}-${month}-${day}`;
}
const inputFecha = document.getElementById("Fecha_muetreo");
inputFecha.max = obtenerFechaActual();


//==Codigo postal=======================================
var inputNumero = document.getElementById("campo_codigo");
inputNumero.addEventListener("input", function () {
  var valor = inputNumero.value;
  valor = valor.replace(/[^0-9]/g, "");
  if (valor.length > 10) {
    valor = valor.slice(0, 10);
  }

  inputNumero.value = valor;

});

/*===============Fecha minima envio====================*/
  var Fecha_Muestreo = document.getElementById('Fecha_muetreo');
  var Fecha_Envio = document.getElementById('Fecha_envio');
  Fecha_Muestreo.addEventListener('change', function() {
    var fechaInicial = Fecha_Muestreo.value;
    Fecha_Envio.setAttribute('min', fechaInicial);
  });


/*===============Fecha minima enpaquetado====================*/
  var Fecha_Empaque = document.getElementById('Fecha_Empaque');
  Fecha_Muestreo.addEventListener('change', function() {
    var fechaInicial2 = Fecha_Muestreo.value;
    Fecha_Empaque.setAttribute('min', fechaInicial2);
  });
    /*===============Fecha minima caducidad====================*/
  var fecha_Caducidad = document.getElementById('Fecha_Caducidad');
  Fecha_Muestreo.addEventListener('change',function(){
    var fechaInicial3= Fecha_Muestreo.value;
    fecha_Caducidad.setAttribute('min',fechaInicial3);
  });

  



