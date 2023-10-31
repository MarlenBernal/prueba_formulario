$(document).ready(function(){
    $('#Opciones_Envio').on('click','#Enviar_Orden',function(env){
        env.preventDefault();
        var parametros = new FormData($("#Formulario_Muetra")[0]);
        $.ajax({
            type: "POST",
            url: "php/crearmuestra.php",
            data: parametros,
            contentType:false,
            processData: false,
            success: function (response) {
                if(response==1){
                    alert('Nueva Orden');
                    window.location.href="orden_servicio.php";
                }else{
                    alert (response);
                }
            }
        });
    });
});