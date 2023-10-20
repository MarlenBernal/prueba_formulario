function registrar_Analisis(){
    var parametros = new FormData($("#Analisis_Form")[0]);
    event.preventDefault();
        $.ajax({
            data:parametros,
            url: "phpAnalisis/Agregar_Analisis.php",
            type: "POST",
            contentType:false,
            processData: false,
            beforesend:function() {
                
            },
            success: function(response) {
                if(response==1){
                    alert ('Muestra Registrada');
                    //window.location.replace("orden_servicio.php");
                }else{
                    alert (response);
                } 
            },
            error:function(response){
                alert(response);
            }
        });
}