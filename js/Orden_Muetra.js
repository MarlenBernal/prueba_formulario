function Hacer_muestra(event){
    var parametros = new FormData($("#Formulario_Muetra")[0]);
    event.preventDefault();
        $.ajax({
            data:parametros,
            url: "php/crearmuestra.php",
            type: "POST",
            contentType:false,
            processData: false,
            beforesend:function() {
                
            },
            success: function(response) {
                if(response==1){
                    window.location.href="orden_servicio.php";
                }else{
                    alert (response);
                }
            },
            error:function(response){
                alert(response);
            }
        });
}