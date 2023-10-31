$(document).ready(function(){
    $('#Cancelar_Analisis').on('click',function Eliminar_Analisi(){
        var parametros = new FormData($("#Analisis_Form")[0]);
        $.ajax({
            data: parametros,
            url: "phpAnalisis/Cancelar_Analisis.php",
            type: "POST",
            contentType:false,
            processData: false,
            success:function(responce){
                if (responce==1) {
                    alert("Analisis Cancelado");
                    window.location.href="datos_muestra.php";
                } else if(responce==2) {
                    alert("Esta orden de anlaisis no existe o fue cancelada");
                    window.location.href="datos_muestra.php";
                }
            },
            error:function(responce){
                alert(responce);
            }
        });
    });
});