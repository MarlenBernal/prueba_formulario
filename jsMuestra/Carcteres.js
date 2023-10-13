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




