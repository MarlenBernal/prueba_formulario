$(document).ready(function(){
    $("#Enviar").click(function(){
        event.preventDefault();

        cadena="orden=" + $("#Buscar").val()+"&fecha="+$("#fecha").val()+"&cliente="+$("#campo").val()
        +"&razon="+$("#razonsocial").val()+"&direccion="+$("#campo_dic").val()+"&correo="+$("#Correo").val()
        +"&telefono="+$("#telefono").val();

        $.ajax({
            type: "POST",
            url: "php/agregar_orden.php",
            data: cadena,
            success: function(res){
                alert (res);
            }
        })

    });
});
