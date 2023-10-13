$(document).ready(function(){
    $("#Enviar").click(function(){
        event.preventDefault();

        cadena="orden=" + $("#Buscar").val()+"&fecha="+$("#fecha").val()+"&cliente="+$("#campo").val()
        +"&razon="+$("#razonsocial").val()+"&direccion="+$("#campo_dic").val()+"&correo="+$("#Correo").val()
        +"&telefono="+$("#telefono").val()+"&representante="+$("#Representante").val();

        $.ajax({
            type: "POST",
            url: "php/agregar_orden.php",
            data: cadena,
            success: function(res){
                if(res==1){
                    window.location.replace("datos_muestra.php");
                    alert ("Orden Realizada");
                    $('#Form_Orden')[0].reset();
                    
                }else if(res==2){
                    alert("Orden de ya existe");
                }else{
                    alert(res);
                }
                
            }
        })

    });
});
