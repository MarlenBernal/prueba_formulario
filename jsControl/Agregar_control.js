function registrar_Control(){
    var parametros = new FormData($("#Control_Formulario")[0]);
    event.preventDefault();
        $.ajax({
            data:parametros,
            url: "phpControl/Agregar_Control.php",
            type: "POST",
            contentType:false,
            processData: false,
            beforesend:function() {
                
            },
            success: function(response) {
                if(response==1){
                    alert ("Control Registrado");
                }else if(response==2){
                    alert("Control Actualizado");
                }
            },
            error:function(response){
                if(response==1){
                    alert ("Control Registrado");
                }else if(response==2){
                    alert("Control Actualizado");
                }
            }
        });
}

