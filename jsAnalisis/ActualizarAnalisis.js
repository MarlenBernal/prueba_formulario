$(document).ready(function(){
    $("#Actualizar_Tabla").click(function(){
        event.preventDefault();

        cadena="orden=" + $("#Buscar").val();

        $.ajax({
            type: "POST",
            url: "phpAnalisis/Actualizar_Tabla.php",
            data: cadena,
            success: function(res){
                $('#Tabla_Analisis').html(res);
            }
        })

    });
});

$(document).ready(function(){
    $("#Actualizar_Tabla2").click(function(){
        event.preventDefault();

        cadena="orden=" + $("#Buscar").val();

        $.ajax({
            type: "POST",
            url: "phpAnalisis/Actualizar_Tabla.php",
            data: cadena,
            success: function(res){
                $('#Tabla_Analisis').html(res);
            }
        })

    });
});
