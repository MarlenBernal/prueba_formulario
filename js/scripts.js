
var inputFecha = document.getElementById("fecha");
var fechaActual = new Date().toISOString().split("T")[0];
inputFecha.value = fechaActual;
