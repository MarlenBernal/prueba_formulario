$(document).ready(function () {
    $('.Orden_Nuevo').on('click','#Agregar_Orden',function() { 
        var Iniciar= new FormData($("#Orden_Form")[0]);
        $.ajax({
            type: "POST",
            url: "phpOrden/Agregar_Orden.php",
            data: Iniciar,
            contentType: false,
            processData:false,
            success: function (response) {
                if(response==1){
                    window.location.href = "orden_muestra.php";
                }else{
                    alert('Datos incompletos o inválidos');
                }
            }
        });
    });
});