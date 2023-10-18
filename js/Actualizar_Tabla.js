$(document).ready(function(){
    $("#Actualizar").click(function(){
        event.preventDefault();

        cadena="orden=" + $("#Buscar").val();

        $.ajax({
            type: "POST",
            url: "php/actualizar_tabla.php",
            data: cadena,
            success: function(res){
                $('#Datos_Tabla').html(res);
            }
        })

    });
});
