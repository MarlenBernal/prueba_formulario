function Cancelar_Muestra(){
    var parametros = new FormData($("#Form_Orden")[0]);
    event.preventDefault();
    $.ajax({
        data:parametros,
        url: "php/Cancelar_Orden.php",
        type: "POST",
        contentType:false,
        processData: false,
        beforesend:function() {
            
        },
        success: function(response) {
            if(response==1){
                alert('Orden eliminada');
                window.location.href="principal.php";
            }else if(response==2){
                alert('No existe esta orden');
                window.location.href="principal.php";
            }
        },
        error:function(response){
            alert(response);
        }
    });

}