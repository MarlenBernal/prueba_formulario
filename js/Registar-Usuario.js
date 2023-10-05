$(document).ready(function(){
    $("#Registar").click(function(){
        event.preventDefault();
        if ($('#RNombre').val() == "") {
            alert("Agrega nombre");
            return false;
        } else if ($('#RApellido').val() == "") {
            alert("Agrega apellido");
            return false;
        }else if($('#RTelefono').val()==""){
            alert("Agrega Telefono");
            return false;
        }else if ($('#RCorreo').val()==""){
            alert("Agrega correo");
            return false;
        }else if($('#Contraseña1')==""){
            alert("Agrega contraseña");
            return false;
        }

        cadena="Nombre=" + $("#RNombre").val()+"&Apellido="+$("#RApellido").val()+"&Telefono="+$("#RTelefono").val()+
        "&Correo=" + $("#RCorreo").val() + "&Contraseña=" + $("#Contraseña1").val() ;

        $.ajax({
            type: "POST",
            url: "php/Registro_Usuario.php",
            data: cadena,
            success: function(res){
                if(res==1){
                    alert ("Usuario Registrado");
                    $('#Registro_Form')[0].reset();
                }else if(res==2){
                    alert ("Este correo no esta disponible");
                }else{
                    alert (res);
                }
            }
        })

    });
});