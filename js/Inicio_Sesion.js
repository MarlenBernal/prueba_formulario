$(document).ready(function(){
    $("#Enviar").click(function(){
        event.preventDefault();

        cadena="Correo=" + $("#Correo").val()+"&Contraseña="+$("#Contraseña").val();

        $.ajax({
            type: "POST",
            url: "php/Inicio_Sesion.php",
            data: cadena,
            success: function(res){
                if(res==1){
                    $(location).attr('href', 'orden_servicio.php');
                    $('#Login_Form')[0].reset();
                }else if(res!=1){
                    alert ("Datos Incorrectos");
                }
            }
        })

    });
});

