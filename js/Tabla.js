$(buscar_Datos());

function buscar_Datos(consulta){

    $.ajax({
        url:'php/tabla_orden.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    }).done(function(res){
        $('#Datos_Tabla').html(res)
    }).fail(function(){
        console.log(error);
    });
}

$(document).on('keyup','#Buscar',function(){
    var valor = $(this).val();
    if(valor != ""){
        buscar_Datos(valor);
    }else{
        tabla();
    }
});