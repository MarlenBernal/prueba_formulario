window.onload = function(){
    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth()+1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if(dia<10)
      dia='0'+dia; //agrega cero si el menor de 10
    if(mes<10)
      mes='0'+mes //agrega cero si el menor de 10
    document.getElementById('fecha').value=ano+"-"+mes+"-"+dia;
  }

  var inputNumero = document.getElementById("telefono");
inputNumero.addEventListener("input", function () {
  var valor = inputNumero.value;
  valor = valor.replace(/[^0-9]/g, "");
  if (valor.length > 10) {
    valor = valor.slice(0, 10);
  }

  inputNumero.value = valor;

});