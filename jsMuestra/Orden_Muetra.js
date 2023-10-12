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
                alert (response);
            },
            error:function(response){
                alert(response);
            }
        });
}