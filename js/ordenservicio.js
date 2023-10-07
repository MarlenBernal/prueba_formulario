function registrar_Orden(){
    var parametros = new FormData($("#Form_Orden")[0]);
    event.preventDefault();
        $.ajax({
            data:parametros,
            url: "php/ordenservicio.php",
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