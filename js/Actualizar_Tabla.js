$(document).ready(function(){
    $("#Actualizar").click(function(){
        event.preventDefault();

        cadena="orden=" + $("#Orden_Trabajo").val();

        $.ajax({
            type: "POST",
            url: "php/actualizar_tabla.php",
            data: cadena,
            success: function(res){
                $('#Tabla_Datos').html(res);
            }
        })

    });
});
