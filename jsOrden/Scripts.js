//=================Fecha Orden=======================//
window.onload = function(){
    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth()+1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if(dia<10)
      dia='0'+dia; //agrega cero si el menor de 10
    if(mes<10)
      mes='0'+mes //agrega cero si el menor de 10
    document.getElementById('Fecha_Orden').value=ano+"-"+mes+"-"+dia;
}

const myInput = document.querySelector('#Orden_Cliente');
const myDatalist = document.querySelector('#lista_Clientes');

// Selecciona la primera opción
myDatalist.options[0].selected = true;

// Selecciona la siguiente opción
myDatalist.options[0].selected = false;
myDatalist.options[1].selected = true;

// Selecciona la siguiente opción
myDatalist.options[1].selected = false;
myDatalist.options[2].selected = true;