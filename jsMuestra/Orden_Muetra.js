function registrar_muestra(){
    var parametros = new FormData($("#Formulario_Muetra")[0]);
    event.preventDefault();
        $.ajax({
            data:parametros,
            url: "phpMuestar/Orden_muestra.php",
            type: "POST",
            contentType:false,
            processData: false,
            beforesend:function() {
                
            },
            success: function(response) {
                if(response==1){
                    alert ('Muestra Registrada');
                    window.location.replace("orden_servicio.php");
                }else{
                    alert (response);
                } 
            },
            error:function(response){
                alert(response);
            }
        });
}